<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">

        <html>
            <head>
                <style>
                    .purchaseOrder {
                    margin: 20px;
                    }
                    .order {
                    padding: 10px;
                    border: 1px solid #ccc;
                    }
                    .items h3 {
                    margin-top: 20px;
                    }
                </style>
            </head>

            <body>
                <div class="purchaseOrder">
                    <div class="order">

                        <div class="orderDate">
                            <p>
                                <strong>Order Date:</strong>
                                <xsl:value-of select="purchaseOrder/order/orderDate"></xsl:value-of>
                            </p>
                        </div>

                        <hr />

                        <div class="shippingAddress">
                            <h3>Shipping Address</h3>
                            <p>
                                <strong>House Number:</strong>
                                <xsl:value-of
                                    select="purchaseOrder/order/shippingAddress/houseNumber"></xsl:value-of>
                            </p>
                            <p>
                                <strong>Street Name:</strong>
                                <xsl:value-of
                                    select="purchaseOrder/order/shippingAddress/streetName"></xsl:value-of>
                            </p>
                            <p>
                                <strong>City:</strong>
                                <xsl:value-of select="purchaseOrder/order/shippingAddress/city"></xsl:value-of>
                            </p>
                        </div>

                        <hr />

                        <div class="billingAddress">
                            <h3>Billing Address</h3>
                            <p>
                                <strong>House Number:</strong>
                                <xsl:value-of
                                    select="purchaseOrder/order/billingAddress/houseNumber"></xsl:value-of>
                            </p>
                            <p>
                                <strong>Street Name:</strong>
                                <xsl:value-of select="purchaseOrder/order/billingAddress/streetName"></xsl:value-of>
                            </p>
                            <p>
                                <strong>City:</strong>
                                <xsl:value-of select="purchaseOrder/order/billingAddress/city"></xsl:value-of>
                            </p>
                        </div>

                        <hr />

                        <div class="items">
                            <h3>Items</h3>

                            <xsl:for-each select="purchaseOrder/order/items/item">
                                <xsl:sort
                                    select="quantity" order="descending" />

                                <div class="item">
                                    <h4> Item - <xsl:value-of select="@itemId" />
                                    </h4>
                                    <p>
                                        <!-- Conditionally change font color based on price -->
                                        <strong>Item Name:</strong>
                                        <xsl:choose>
                                            <xsl:when test="price &gt; 100">
                                                <span style="color:green;">
                                                    <xsl:value-of select="itemName" />
                                                </span>
                                            </xsl:when>
                                            <xsl:otherwise>
                                                <span style="color:red;">
                                                    <xsl:value-of select="itemName" />
                                                </span>
                                            </xsl:otherwise>
                                        </xsl:choose>
                                    </p>

                                    <!-- Display Quantity and Price -->
                                    <p>
                                        <strong>Quantity:</strong>
                                        <xsl:value-of select="quantity" />
                                    </p>
                                    <p>
                                        <strong>Price:</strong>
                                        <xsl:value-of select="price" />
                                    </p>
                                </div>
                                <hr />
                            </xsl:for-each>

                        </div>
                        <hr />
                    </div>

                </div>

            </body>
        </html>

    </xsl:template>

</xsl:stylesheet>