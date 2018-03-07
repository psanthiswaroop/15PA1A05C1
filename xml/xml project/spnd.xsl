<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>My Expenses</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th style="text-align:left">Date</th>
      <th style="text-align:left">Amount</th>
      <th style="text-align:left">Categoryname</th>
      <th style="text-align:left">description</th>
    </tr>
    <xsl:for-each select="spndmgr/expenses">
    <tr>
      <td><xsl:value-of select="date"/></td>
      <td><xsl:value-of select="amount"/></td>
     <xsl:for-each select="category">  
          <td><xsl:value-of select="categoryname"/></td>
          <td><xsl:value-of select="description"/></td>
     </xsl:for-each>  
    </tr>
     </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

