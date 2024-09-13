<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <style>
                    .heading {
                    color: black;
                    font-weight: bold;
                    text-decoration: underline;
                    font-variant: small-caps;
                    }

                    .orderby {
                    font-family: Tahoma;
                    color: darkred;
                    font-size: 11pt;
                    font-weight: bold;
                    border: 1px solid darkgray;
                    padding: 10px;
                    margin-bottom: 10px;
                    }

                    .shipto {
                    font-family: Verdana;
                    color: darkgreen;
                    font-size: 11pt;
                    font-weight: bold;
                    border: 1px solid darkgray;
                    padding: 10px;
                    margin-bottom: 10px;
                    }

                    .orderitem {
                    font-family: Arial;
                    color: navy;
                    font-size: 11pt;
                    font-weight: bold;
                    border: 1px solid darkgray;
                    padding: 10px;
                    margin-bottom: 10px;
                    }
                </style>
            </head>

            <body>
                <!-- Display Orderby section -->
                <div class="orderby">
                    <h2 class="heading">Order By</h2>
                    <p>
                        <strong>Order Name:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderby/Ordername" />
                    </p>
                    <p>
                        <strong>Order Phone:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderby/Orderphone" />
                    </p>
                    <p>
                        <strong>Order Date:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderby/Orderdate" />
                    </p>
                </div>

                <!-- Display Shipto section -->
                <div class="shipto">
                    <h2 class="heading">Ship To</h2>
                    <p>
                        <strong>Name:</strong>
                        <xsl:value-of select="Order/Shiporder/Shipto/Name" />
                    </p>
                    <p>
                        <strong>Street:</strong>
                        <xsl:value-of select="Order/Shiporder/Shipto/Shipaddress/Street" />
                    </p>
                    <p>
                        <strong>House No:</strong>
                        <xsl:value-of select="Order/Shiporder/Shipto/Shipaddress/Houseno" />
                    </p>
                    <p>
                        <strong>Municipality:</strong>
                        <xsl:value-of select="Order/Shiporder/Shipto/Shipaddress/Municipality" />
                    </p>
                    <p>
                        <strong>City:</strong>
                        <xsl:value-of select="Order/Shiporder/Shipto/Shipaddress/City" />
                    </p>
                    <p>
                        <strong>District:</strong>
                        <xsl:value-of select="Order/Shiporder/Shipto/Shipaddress/District" />
                    </p>
                    <p>
                        <strong>Country:</strong>
                        <xsl:value-of select="Order/Shiporder/Shipto/Shipaddress/Country" />
                    </p>
                    <p>
                        <strong>Postal Code:</strong>
                        <xsl:value-of select="Order/Shiporder/Shipto/Shipaddress/Postalcode" />
                    </p>
                    <p>
                        <strong>Telephone:</strong>
                        <xsl:value-of select="Order/Shiporder/Shipto/Shipaddress/Telephone" />
                    </p>
                    <p>
                        <strong>Mobile:</strong>
                        <xsl:value-of select="Order/Shiporder/Shipto/Shipaddress/Mobile" />
                    </p>
                </div>

                <!-- Display Orderitem section -->
                <div class="orderitem">
                    <h2 class="heading">Order Item</h2>
                    <p>
                        <strong>Item Number:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderitem/Itemnumber" />
                    </p>
                    <p>
                        <strong>Item Name:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderitem/Itemname" />
                    </p>
                    <p>
                        <strong>Item Note:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderitem/Itemnote" />
                    </p>
                    <p>
                        <strong>Item Insurance:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderitem/ItemInsurance" />
                    </p>
                    <p>
                        <strong>Item Quantity:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderitem/Itemquantity" />
                    </p>
                    <p>
                        <strong>Currency:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderitem/Currency" />
                    </p>
                    <p>
                        <strong>Item Unit Price:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderitem/Itemunitprice" />
                    </p>
                    <p>
                        <strong>Ship Charge:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderitem/Shipcharge" />
                    </p>
                    <p>
                        <strong>Total Price:</strong>
                        <xsl:value-of select="Order/Shiporder/Orderitem/Totalprice" />
                    </p>
                </div>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>