<?php 
$system_links = ["/products.php","/product/argent-omega.php","/product/argent-guardian.php","/product/argent-aws.php","/product/argent-console.php","/product/argent-sharepoint.php","/product/argent-exchange.php","/product/argent-for-java.php","/product/argent-for-snmp.php","/product/argent-for-storage.php","/product/argent-for-xenapp.php","/product/argent-for-active-directory.php","/product/argent-for-sap.php"];
$batch_links = ["/product/batch-job-automation.php","/product/argent-worldview.php"];
$web_links = ["/product/argent-sentinel.php","/product/argent-sentry-ultra.php"];
$security_links = ["/product/argent-for-compliance.php","/product/argent-for-security.php"];
$virtual_links = ["/product/argent-for-hyper-v.php","/product/argent-for-vmware.php","/product/argent-for-xenserver.php"];
$enterprise_links = ["/product/argent-boardroom.php","/product/argent-commander.php","/product/argent-global-manager.php","/product/argent-reports.php"];
$database_links = ["/product/argent-for-mysql.php","/product/argent-for-oracle.php","/product/argent-for-sql-server.php","/product/argent-for-sybase.php"];
?>
<div class="accordions" id="accordion">
  <div class="card">
    <div class="card-header" id="heading-12">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-12" aria-expanded="true"
        aria-controls="collapse12"> System and Applications </button>
    </div>
    <div id="collapse-12" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $system_links) ? 'show' : ''; ?>" aria-labelledby="heading-12" data-parent="#accordion">
      <div class="card-body">
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == "/product/argent-omega.php") ? 'active' : (($_SERVER["REQUEST_URI"] == "/products.php") ? 'active' : ''); ?> " href="/product/argent-omega.php">
              Argent Omega </a> </li>
          <!-- <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-guardian.php" ? 'active' : '' ?> " href="/product/argent-guardian.php">
              Argent Guardian Ultra </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-aws.php" ? 'active' : '' ?> " href="/product/argent-aws.php">
              Argent AWS </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-console.php" ? 'active' : '' ?> " href="/product/argent-console.php">
              Argent Console </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-sharepoint.php" ? 'active' : '' ?> " href="/product/argent-sharepoint.php">
              Argent for SharePoint </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-exchange.php" ? 'active' : '' ?> " href="/product/argent-exchange.php">
              Argent for Exchange </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-java.php" ? 'active' : '' ?> " href="/product/argent-for-java.php">
              Argent for Java </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-snmp.php" ? 'active' : '' ?> " href="/product/argent-for-snmp.php">
              Argent for SNMP </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-storage.php" ? 'active' : '' ?> " href="/product/argent-for-storage.php">
              Argent for Storage </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-xenapp.php" ? 'active' : '' ?> " href="/product/argent-for-xenapp.php">
              Argent for XenApp </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-active-directory.php" ? 'active' : '' ?> " href="/product/argent-for-active-directory.php">
              Argent for Active Directory </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-sap.php" ? 'active' : '' ?> " href="/product/argent-for-sap.php">
              Argent for SAP </a> </li> -->
        </ul>
        
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
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link  <?php echo $_SERVER["REQUEST_URI"] == "/product/batch-job-automation.php" ? 'active' : '' ?>" href="/product/batch-job-automation.php">
              Argent Job Scheduler </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-worldview.php" ? 'active' : '' ?> " href="/product/argent-worldview.php">
              Argent WorldView </a> </li>
        </ul>
        
      </div>
    </div>
  </div>
  <!-- <div class="card">
    <div class="card-header" id="heading-13">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-13" aria-expanded="false"
        aria-controls="collapse13"> Web and Intranet </button>
    </div>
    <div id="collapse-13" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $web_links) ? 'show' : ''; ?>" aria-labelledby="heading-13" data-parent="#accordion">
      <div class="card-body">
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link  <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-sentinel.php" ? 'active' : '' ?>" href="/product/argent-sentinel.php">
              Argent Sentinel </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-sentry-ultra.php" ? 'active' : '' ?> " href="/product/argent-sentry-ultra.php">
              Argent Sentry Ultra </a> </li>
        </ul>
        
      </div>
    </div>
  </div> -->
  <!-- <div class="card">
    <div class="card-header" id="heading-14">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-14" aria-expanded="false"
        aria-controls="collapse14"> Security and Compliance </button>
    </div>
    <div id="collapse-14" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $security_links) ? 'show' : ''; ?>" aria-labelledby="heading-14" data-parent="#accordion">
      <div class="card-body">
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-compliance.php" ? 'active' : '' ?>" href="/product/argent-for-compliance.php">
              Argent for Compliance </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-security.php" ? 'active' : '' ?> " href="/product/argent-for-security.php">
              Argent for Security </a> </li>
        </ul>
        
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
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-hyper-v.php" ? 'active' : '' ?>" href="/product/argent-for-hyper-v.php">
              Argent for Hyper-V </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-vmware.php" ? 'active' : '' ?> " href="/product/argent-for-vmware.php">
              Argent for VMware </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-xenserver.php" ? 'active' : '' ?> " href="/product/argent-for-xenserver.php">
              Argent for XenServer </a> </li>
        </ul>
        
      </div>
    </div>
  </div> -->
  <div class="card">
    <div class="card-header" id="heading-16">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-16" aria-expanded="false"
        aria-controls="collapse16"> Enterprise Overviews </button>
    </div>
    <div id="collapse-16" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $enterprise_links) ? 'show' : ''; ?>" aria-labelledby="heading-16" data-parent="#accordion">
      <div class="card-body">
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-boardroom.php" ? 'active' : '' ?>" href="/product/argent-boardroom.php">
              Argent BoardRoom </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-commander.php" ? 'active' : '' ?> " href="/product/argent-commander.php">
              Argent Commander </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-global-manager.php" ? 'active' : '' ?> " href="/product/argent-global-manager.php">
              Argent Global Manager </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-reports.php" ? 'active' : '' ?> " href="/product/argent-reports.php">
              Argent Reports </a> </li>
        </ul>
        
      </div>
    </div>
  </div>
  <!-- <div class="card">
    <div class="card-header" id="heading-17">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-17" aria-expanded="false"
        aria-controls="collapse17"> Databases </button>
    </div>
    <div id="collapse-17" class="collapse <?php echo in_array($_SERVER["REQUEST_URI"], $database_links) ? 'show' : ''; ?>" aria-labelledby="heading-17" data-parent="#accordion">
      <div class="card-body">
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-mysql.php" ? 'active' : '' ?>" href="/product/argent-for-mysql.php">
              Argent for MySQL </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-oracle.php" ? 'active' : '' ?> " href="/product/argent-for-oracle.php">
              Argent for Oracle </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-sql-server.php" ? 'active' : '' ?> " href="/product/argent-for-sql-server.php">
              Argent for SQL Server </a> </li>
          <li class="nav-item"> <a class="nav-link <?php echo $_SERVER["REQUEST_URI"] == "/product/argent-for-sybase.php" ? 'active' : '' ?> " href="/product/argent-for-sybase.php">
              Argent for Sybase </a> </li>
        </ul>
        
      </div>
    </div>
  </div> -->
</div>