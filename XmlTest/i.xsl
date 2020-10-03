<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <style>
            div
            {
                text-align:center;
                width:48%;
                border:2px solid black;
            }
            td,th
            {
                font-size:larger;
                padding:20px;
                text-align:center !important;
            }
                </style>
            </head>
            <body>
                <h1 style="text-align:center;">Library Management System</h1>
                <div class='Books' style="float:left;">
                    <h2>List of Books</h2>
                    <table border="2" align="center">
                        <tr bgcolor="#9acd32">
                            <th style="text-align:left">Title</th>
                            <th style="text-align:left">Author</th>
                            <th style="text-align:left">ISBN</th>
                            <th style="text-align:left">Price</th>
                        </tr>
                        <xsl:for-each select="Library/Book">
                            <tr>
                                <td>
                                    <xsl:value-of select="Title"/>
                                </td>
                                <td>
                                    <xsl:value-of select="Author"/>
                                </td>
                                <td>
                                    <xsl:value-of select="ISBN"/>
                                </td>
                                <td>
                                    <xsl:value-of select="Price"/>
                                </td>
                            </tr>
                        </xsl:for-each>
                    </table>
                </div>


                <div class='Librarians'  style="float:right;">
                    <h2>List of Librarians</h2>
                    <table border="2"  align="center">
                        <tr bgcolor="#9acd32">
                            <th style="text-align:left">Name</th>
                            <th style="text-align:left">Salary</th>
                        </tr>
                        <xsl:for-each select="Library/Librarian">
                            <tr>
                                <td>
                                    <xsl:value-of select="Name"/>
                                </td>
                                <td>
                                    <xsl:value-of select="Salary"/>
                                </td>
                            </tr>
                        </xsl:for-each>
                    </table>
                </div>

            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>