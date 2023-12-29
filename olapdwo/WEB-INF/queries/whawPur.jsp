
<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/dw_aw?user=root&password=" catalogUri="/WEB-INF/queries/whawPur.xml">

select {[Measures].[Order Quantity],[Measures].[Line Total]} ON COLUMNS,
  {([Time],[Vendor],[Product])} ON ROWS
from [Vendor]


</jp:mondrianQuery>
<c:set var="title01" scope="session">Query WH Adventure  Fact Purchase using Mondrian OLAP</c:set>
