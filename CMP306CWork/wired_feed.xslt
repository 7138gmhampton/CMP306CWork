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

  <xsl:template match="/">
    <!--<xsl:element name="h1">
      <xsl:value-of select="channel/description"/>
    </xsl:element>-->
    <xsl:apply-templates></xsl:apply-templates>
  </xsl:template>
  
  <xsl:template match="item">
    <xsl:element name="div">
      <xsl:attribute name="class">col-4</xsl:attribute>
      <xsl:element name="div">
        <xsl:attribute name="class">card</xsl:attribute>
        <xsl:element name="div">
          <xsl:attribute name="class">card-header</xsl:attribute>
          <xsl:element name="a">
            <xsl:attribute name="class">card-title</xsl:attribute>
            <xsl:attribute name="href">
              <xsl:value-of select="link"/>
            </xsl:attribute>
            <xsl:value-of select="title"/>
          </xsl:element>
        </xsl:element>

        <xsl:element name="div">
          <xsl:attribute name="class">card-body</xsl:attribute>
          <xsl:element name="p">
            <xsl:value-of select="description"/>
          </xsl:element>
        </xsl:element>
      </xsl:element>
    </xsl:element>
  </xsl:template>

  <xsl:template match="channel/title"></xsl:template>
  <xsl:template match="channel/description"></xsl:template>
  <xsl:template match="channel/link"></xsl:template>
  <xsl:template match="channel/copyright"></xsl:template>
  <xsl:template match="channel/language"></xsl:template>
  <xsl:template match="channel/lastBuildDate"></xsl:template>
</xsl:stylesheet>
