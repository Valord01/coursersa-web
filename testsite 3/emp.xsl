<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html lang="en">
			<head>
				<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
					<title>Test</title>
				</meta>
				<link rel="stylesheet" href="css/bootstrap.min.css"/>
				<link rel="stylesheet" href="css/style.css"/>
				<link rel="stylesheet" href="css/fontawesome.min.css"/>
				<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
			</head>
			<body>
				<div class="container">
					<div class="row">
						<div class="bg2">
							<div class="col-md-12">
								<h3 class="cg2" style="text-transform: none !important; margin-top:100px">Employee Management System:</h3>
								<p id="service">
									<table style="width:100%">
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Age</th>
											<th>Salary</th>
											<th>Email</th>
											<th>MobNume</th>
											<th>Desgination</th>
											<th>Promotion</th>
										</tr>
										<xsl:for-each select="Company/Employee">
											<xsl:variable name="Ea" select="Emp-age"/>
											<tr>
												<td>
													<xsl:value-of select="@EMPID"/>
												</td>
												<td>
													<xsl:value-of select="Emp-name"/>
												</td>
												<td>
													<xsl:value-of select="Emp-age"/>
												</td>
												<td>
													<xsl:value-of select="Emp-salary"/>
												</td>
												<td>
													<xsl:value-of select="Emp-emailid"/>
												</td>
												<td>
													<xsl:value-of select="Emp-Phonenum"/>
												</td>
												<td>
													<xsl:value-of select="Emp-designation"/>
												</td>
												<xsl:choose>
													<xsl:when test="Emp-age >= 50">
														<td>Associate Project Manager</td>
													</xsl:when>
													<xsl:when test="Emp-age >= 40">
														<td>Team Leader</td>
													</xsl:when>
													<xsl:otherwise>
														<td>Developer</td>
													</xsl:otherwise>
												</xsl:choose>
											</tr>
										</xsl:for-each>
									</table>
								</p>
							</div>
						</div>
					</div>
				</div>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>