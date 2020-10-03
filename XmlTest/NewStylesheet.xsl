<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<!-- TODO: Auto-generated template -->
	<html>
	<body>
	<h1>Librarians</h1>
	<table border="2">
	<tr bgcolor="red">
	<th>First Name</th>
	<th>Last Name</th>
	<th>Nick Name</th>
	<th>Post</th>
	<th>Desc_of_Job</th>
	<th>Qualification</th>
	<th>Salary</th>
	</tr>
	<xsl:for-each select="tns:globalLibrary/tns:Libranian">
	<tr>
	<td><xsl:value-of select="tns:Firstname"></xsl:value-of></td>
	<td><xsl:value-of select="tns:Lastname"></xsl:value-of></td>
	<td><xsl:value-of select="tns:Nickname"></xsl:value-of></td>
	<td><xsl:value-of select="tns:Post"></xsl:value-of></td>
	<td><xsl:value-of select="tns:Desc_of_job"></xsl:value-of></td>
	<td><xsl:value-of select="tns:Qualification"></xsl:value-of></td>
	<td><xsl:value-of select="tns:Salary"></xsl:value-of></td>
	</tr> 
	</xsl:for-each>
	
	</table>
	</body>
	</html>
	</xsl:template>
</xsl:stylesheet>