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
                <xsl:value-of select="/id/"></xsl:value-of>
            </p>
            <p class="nameclass">
                <strong>Id:</strong>
                <xsl:value-of select="/name/"></xsl:value-of>
            </p>
            <p class="codeclass">
                <strong>Id:</strong>
                <xsl:value-of select="/code/"></xsl:value-of>
            </p>
            <p>
                <strong>Id:</strong>
                <xsl:value-of select="/category/"></xsl:value-of>
            </p>
            <p>
                <strong>Id:</strong>
                <xsl:value-of select="/origin/"></xsl:value-of>
            </p>
            <p class="priceclass">
                <strong>Id:</strong>
                <xsl:value-of select="/price/"></xsl:value-of>
            </p>
            <p class="stockclass">
                <strong>Id:</strong>
                <xsl:value-of select="/stock/"></xsl:value-of>
            </p>
            
        </body>

    </html>

    </xsl:template>

</xsl:stylesheet>

    
