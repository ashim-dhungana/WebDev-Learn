<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">

        <html>
            <head>
                <style>
                    .nameclass, .codeclass{
                    font-size: 16pt;
                    color: green;
                    font-weight: bold;
                    }
                    .priceclass{
                    font-size: 14pt;
                    }
                    .stockclass{
                    color: red;
                    }

                </style>
            </head>

            <body>
                <p>
                    <strong>Id:</strong>
                    <xsl:value-of select="Products/id"></xsl:value-of>
                </p>
                <p class="nameclass">
                    <strong>Name:</strong>
                    <xsl:value-of select="Products/name"></xsl:value-of>
                </p>
                <p class="codeclass">
                    <strong>Code:</strong>
                    <xsl:value-of select="Products/code"></xsl:value-of>
                </p>
                <p>
                    <strong>Category:</strong>
                    <xsl:value-of select="Products/category"></xsl:value-of>
                </p>
                <p class="priceclass">
                    <strong>Price:</strong>
                    <xsl:value-of select="Products/price"></xsl:value-of>
                    <span> (<xsl:value-of select="Products/price/@currency"></xsl:value-of>) </span>
                </p>
                <p class="stockclass">
                    <strong>Stock:</strong>
                    <xsl:value-of select="Products/stock"></xsl:value-of>
                </p>

            </body>

        </html>

    </xsl:template>

</xsl:stylesheet>