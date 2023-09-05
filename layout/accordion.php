<?php 
$system_links = ["/product/argent-omega/","/product/argent-guardian/","/product/argent-aws/","/product/argent-console/","/product/argent-sharepoint/","/product/argent-exchange/","/product/argent-for-java/","/product/argent-for-snmp/","/product/argent-for-storage/","/product/argent-for-xenapp/","/product/argent-for-active-directory/","/product/argent-for-sap/"];
$batch_links = ["/product/batch-job-automation/","/product/argent-worldview/"];
$web_links = ["/product/argent-sentinel/","/product/argent-sentry-ultra/"];
$security_links = ["/product/argent-for-compliance/","/product/argent-for-security/"];
$virtual_links = ["/product/argent-for-hyper-v/","/product/argent-for-vmware/","/product/argent-for-xenserver/"];
$enterprise_links = ["/product/argent-boardroom/","/product/argent-commander/","/product/argent-global-manager/","/product/argent-reports/"];
$database_links = ["/product/argent-for-mysql/","/product/argent-for-oracle/","/product/argent-for-sql-server/","/product/argent-for-sybase/"];
?>
<div class="accordions" id="accordion">
  <div class="card">
    <div class="card-header" id="heading-12">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-12" aria-expanded="true"
        aria-controls="collapse12"> System and Applications </button>
    </div>
    <div id="collapse-12" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $system_links) ? 'show' : ''; ?>" aria-labelledby="heading-12" data-parent="#accordion">
      <div class="card-body">
        <!-- Tabs List -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-omega/" ? 'active' : '' ?> " href="/product/argent-omega/">
              Argent Omega </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-guardian/" ? 'active' : '' ?> " href="/product/argent-guardian/">
              Argent Guardian Ultra </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-aws/" ? 'active' : '' ?> " href="/product/argent-aws/">
              Argent AWS </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-console/" ? 'active' : '' ?> " href="/product/argent-console/">
              Argent Console </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-sharepoint/" ? 'active' : '' ?> " href="/product/argent-sharepoint/">
              Argent for SharePoint </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-exchange/" ? 'active' : '' ?> " href="/product/argent-exchange/">
              Argent for Exchange </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-java/" ? 'active' : '' ?> " href="/product/argent-for-java/">
              Argent for Java </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-snmp/" ? 'active' : '' ?> " href="/product/argent-for-snmp/">
              Argent for SNMP </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-storage/" ? 'active' : '' ?> " href="/product/argent-for-storage/">
              Argent for Storage </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-xenapp/" ? 'active' : '' ?> " href="/product/argent-for-xenapp/">
              Argent for XenApp </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-active-directory/" ? 'active' : '' ?> " href="/product/argent-for-active-directory/">
              Argent for Active Directory </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-sap/" ? 'active' : '' ?> " href="/product/argent-for-sap/">
              Argent for SAP </a> </li>
        </ul>
        <!-- Tabs List -->
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading-11">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false"
        aria-controls="collapse11"> Batch Job Automation </button>
    </div>
    <div id="collapse-11" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $batch_links) ? 'show' : ''; ?>" aria-labelledby="heading-11" data-parent="#accordion">
      <div class="card-body">
        <!-- Tabs List -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link  <?php echo $_SERVER["REQUEST_URI"] == "/product/batch-job-automation/" ? 'active' : '' ?>" href="/product/batch-job-automation/">
              Argent Job Scheduler </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-worldview/" ? 'active' : '' ?> " href="/product/argent-worldview/">
              Argent WorldView </a> </li>
        </ul>
        <!-- Tabs List -->
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading-13">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-13" aria-expanded="false"
        aria-controls="collapse13"> Web and Intranet </button>
    </div>
    <div id="collapse-13" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $web_links) ? 'show' : ''; ?>" aria-labelledby="heading-13" data-parent="#accordion">
      <div class="card-body">
        <!-- Tabs List -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link  <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-sentinel/" ? 'active' : '' ?>" href="/product/argent-sentinel/">
              Argent Sentinel </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-sentry-ultra/" ? 'active' : '' ?> " href="/product/argent-sentry-ultra/">
              Argent Sentry Ultra </a> </li>
        </ul>
        <!-- Tabs List -->
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading-14">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-14" aria-expanded="false"
        aria-controls="collapse14"> Security and Compliance </button>
    </div>
    <div id="collapse-14" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $security_links) ? 'show' : ''; ?>" aria-labelledby="heading-14" data-parent="#accordion">
      <div class="card-body">
        <!-- Tabs List -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-compliance/" ? 'active' : '' ?>" href="/product/argent-for-compliance/">
              Argent for Compliance </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-security/" ? 'active' : '' ?> " href="/product/argent-for-security/">
              Argent for Security </a> </li>
        </ul>
        <!-- Tabs List -->
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading-15">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-15" aria-expanded="false"
        aria-controls="collapse15"> Virtualization </button>
    </div>
    <div id="collapse-15" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $virtual_links) ? 'show' : ''; ?>" aria-labelledby="heading-15" data-parent="#accordion">
      <div class="card-body">
        <!-- Tabs List -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-hyper-v/" ? 'active' : '' ?>" href="/product/argent-for-hyper-v/">
              Argent for Hyper-V </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-vmware/" ? 'active' : '' ?> " href="/product/argent-for-vmware/">
              Argent for VMware </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-xenserver/" ? 'active' : '' ?> " href="/product/argent-for-xenserver/">
              Argent for XenServer </a> </li>
        </ul>
        <!-- Tabs List -->
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading-16">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-16" aria-expanded="false"
        aria-controls="collapse16"> Enterprise Overviews </button>
    </div>
    <div id="collapse-16" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $enterprise_links) ? 'show' : ''; ?>" aria-labelledby="heading-16" data-parent="#accordion">
      <div class="card-body">
        <!-- Tabs List -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-boardroom/" ? 'active' : '' ?>" href="/product/argent-boardroom/">
              Argent BoardRoom </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-commander/" ? 'active' : '' ?> " href="/product/argent-commander/">
              Argent Commander </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-global-manager/" ? 'active' : '' ?> " href="/product/argent-global-manager/">
              Argent Global Manager </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-reports/" ? 'active' : '' ?> " href="/product/argent-reports/">
              Argent Reports </a> </li>
        </ul>
        <!-- Tabs List -->
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading-17">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-17" aria-expanded="false"
        aria-controls="collapse17"> Databases </button>
    </div>
    <div id="collapse-17" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $database_links) ? 'show' : ''; ?>" aria-labelledby="heading-17" data-parent="#accordion">
      <div class="card-body">
        <!-- Tabs List -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-mysql/" ? 'active' : '' ?>" href="/product/argent-for-mysql/">
              Argent for MySQL </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-oracle/" ? 'active' : '' ?> " href="/product/argent-for-oracle/">
              Argent for Oracle </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-sql-server/" ? 'active' : '' ?> " href="/product/argent-for-sql-server/">
              Argent for SQL Server </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-sybase/" ? 'active' : '' ?> " href="/product/argent-for-sybase/">
              Argent for Sybase </a> </li>
        </ul>
        <!-- Tabs List -->
      </div>
    </div>
  </div>
</div>