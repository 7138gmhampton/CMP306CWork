<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:msxsl="urn:schemas-microsoft-com:xslt" exclude-result-prefixes="msxsl"
>
    <xsl:output method="xml" indent="yes"/>

    <!--<xsl:template match="@* | node()">
        <xsl:copy>
            <xsl:apply-templates select="@* | node()"/>
        </xsl:copy>
    </xsl:template>-->
  <xsl:template match="item">
    <xsl:element name="h3">
      <!--<xsl:value-of select="title"></xsl:value-of>-->
      <xsl:element name="p">
        <xsl:value-of select="title"></xsl:value-of>
      </xsl:element>
    </xsl:element>
  </xsl:template>
</xsl:stylesheet>
