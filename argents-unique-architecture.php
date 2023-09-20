<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <title>Argent's Unique Architecture | Argent</title>
  <link rel="stylesheet" href="/assets/css/pages.css" />
  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
    id='jquery-cdn-js'></script>
  <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
    id='bootstrap.min.js-cdn-js'></script>
  <link rel='stylesheet' id='bootstrap.min-css'
    href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' type='text/css' media='all' />
  <link rel="stylesheet" href="/assets/css/pages.css" />
  <link rel="stylesheet" href="/assets/css/styles.css" />
  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
      id='jquery-cdn-js'></script>
  <link rel="icon" href="/assets/images/fav.png" sizes="32x32" />
  <link rel="icon" href="/assets/images/fav.png" sizes="192x192" />
	<script src="/assets/scripts/header.js"></script>
  <link rel="apple-touch-icon" href="/assets/images/fav.png" />
   
</head>

<body class="font-cairo">

  <?php include './layout/header.php'; ?>

  <main>
    <section class="banner inner">
      <div class="container">
        <div class="text-center">
          <h1>Argent's Unique Architecture</h1>
        </div>
      </div>
    </section>
    <section class="architecture section-padding">
      <div class="container">
        <div class="inner-tabs">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li role="presentation" class="active">
              <a class="active" href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a>
            </li>
            <li role="presentation">
              <a class="" href="#the-four-building-blocks" aria-controls="the-four-building-blocks" role="tab"
                data-toggle="tab">The Four Building Blocks</a>
            </li>
          </ul>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade show active" id="overview">
              <p>The Argent Architecture handles from the smallest to the largest networks – from 10 servers to over
                25,000 servers. Argent provides three different architectures – Customers can choose the architecture
                best suited for their precise needs. (See help.Argent.com for more information).</p>
              <h3>Monitor With Or Without Agents</h3>
              <p>Local monitoring and remote monitoring both have advantages and drawbacks. Argent provides you with the
                choice. Most Argent Customers use both – some servers have local monitoring agents installed, while
                others are monitored remotely across the network.</p>
              <h3>Fault-Tolerant Design</h3>
              <p>With the real world in mind, Argent’s unique and patented Mother-Daughter architecture guarantees
                reliable data transfers over unreliable networks. The world’s largest companies and government agencies
                depend on Argent to reliably monitor in an unreliable world.</p>
              <h3>Total Security</h3>
              <p>Argent is engineered with complete and integrated firewall support. No matter how sophisticated the
                environment, Argent monitors it. Of course, Argent comes standard with 128-bit encryption and you can
                add your own more powerful encryption snap-ins.</p>
              <h3>Automatic Remote Installation</h3>
              <p>Some Customers decide they want to use local agents on thousands of servers. This is a simple chore
                with Argent’s mass-installation options – in a matter of hours you can push Argent out to thousands of
                servers.</p>
              <h3>Automatic Report Distribution</h3>
              <p>With Argent, you can easily email reports and charts daily. Argent uses industry-standard Crystal
                Reports.</p>
              <p>For example, SLA reports for the past day are automatically emailed to management each morning — Argent
                comes with over 200 predefined reports.</p>
            </div>
            <div role="tabpanel" class="tab-pane fade " id="the-four-building-blocks">
              <p>One interface is used by all Argent products and the interface comes in both GUI and web formats.</p>
              <p>One interface for all Argent products: Argent has no learning curve – no expensive consultants, just
                solid, old-fashioned engineering excellence.</p>
              <h3>Rules</h3>
              <p>Rules are tests; a Rule is broken if the threshold is exceeded.</p>
              <p>For example, a Performance Rule may be defined as “If CPU usage exceeds 80% three times in a row”; a
                Service Rule may be defined as “If any Exchange service stops”.</p>
              <p>Argent’s Rules get into the heart of the actual operating systems – Argent uses API calls for Windows,
                the Unixes, and Linux. Argent gets down to the bare metal.</p>
              <p>There are over 3,000 pre-defined Rules.</p>
              <p>With these pre-defined Rules, Argent monitors your entire environment: Windows servers, Linux servers,
                Unix servers, WMI, SNMP devices, UPS power supplies, phone systems, air conditioning plants, security
                systems.</p>
              <h3>Monitoring Groups</h3>
              <p>A Monitoring Group is a list of one or more servers or devices to be monitored. Monitoring Groups are
                shared by all Argent products – the same Monitoring Group can be used in any number of Argent products.
              </p>
              <h3>Alerts</h3>
              <p>Argent has 18 different types of Alerts and they fall into two classes: Notification Alerts and Action
                Alerts. A Notification Alert, such as an Alphanumeric Pager Alert, sends the details of a broken Rule;
                an Action Alert takes corrective action, such as a SQL Alert executing a SQL statement.</p>
              <p>For example, if a SQL Transaction Log becomes too large, an Alphanumeric Pager Alert and an Email Alert
                can be fired, and a SQL Alert can also be executed to run a SQL statement to truncate the SQL
                Transaction Log.</p>
              <p>In this way, Argent first alerts you of a problem and then automatically corrects the problem for you.
              </p>
              <h3>Relators</h3>
              <p>Relators tie together – or relate – Rules, Alerts, and Monitoring Groups.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include './layout/footer.php'; ?>



</body>

</html>