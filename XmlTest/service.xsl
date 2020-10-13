<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
 	<html>
  		<body>
    		<h2 align="center">DETAILS OF OUR SERVICES</h2>
    		<table border="1" align="center">
      			<tr bgcolor="#00887a">
				  	<th>Service ID</th>
					<th>Service Name</th>
        			<th>Catagory</th>
        			<th>Incharge</th>
        			<th>Phone Number</th>
					<th>Start Date</th>
					<th>End Date</th>
      			</tr>
      			<xsl:for-each select="service/booking">
	        		<tr>
						<td><xsl:value-of select="id"/></td>
	          			<td><xsl:value-of select="name"/></td>
	          			<td><xsl:value-of select="catagory"/></td>
	          			<td><xsl:value-of select="incharge"/></td>
	          			<td><xsl:value-of select="phone"/></td>
						<td><xsl:value-of select="start"/></td>
	          			<td><xsl:value-of select="end"/></td>
	        		</tr>
      			</xsl:for-each>
    		</table>
  		</body>
  	</html>
</xsl:template>
</xsl:stylesheet>