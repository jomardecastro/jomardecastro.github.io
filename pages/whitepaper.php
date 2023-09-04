<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <title>White Papers | Argent</title>
    <link rel="stylesheet" href="assets/css/pages.css" />
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 600 !important;
        }
    </style>
</head>

<body class="font-cairo">

    <?php include '../layout/header.php'; ?>

    <main>
        <section class="banner inner">
            <div class="container">
                <div class="text-center small">
                    <h1>White Papers And Comparisons</h1>
                    <p>All Argent White Papers and Comparison Papers can be downloaded free of charge.</p>
                </div>
            </div>
        </section>
        <section class="py-10 lg:py-[60px] px-4 lg:px-0">
        <div class="container flex flex-col gap-16">
                <div class="grid lg:grid-cols-3 gap-4">
                    <?php
                    $jsonData = '[
                        {
                            "title":"Argent White Paper \n Monitor CCTVs In Under Four Hours",
                            "link":"assets/pdf/Argent_Omega__FREE_FEATURE_White_Paper_Automatically_Monitor_CCTV_Cameras_In_Under_Four_Hours.pdf",
                            "free":true
                        },
                        {
                            "title":"Argent White Paper \n Monitoring SSL Certificates",
                            "link":"assets/pdf/Argent_Omega_FREE_FEATURE_Monitoring_SSL_Certificates_With_Argent_Omega.pdf",
                            "free":true
                        },
                        {
                            "title":"Argent White Paper \n Keeping All Kids Safe",
                            "link":"assets/pdf/Argent_Omega_FREE_FEATURE_White Paper_Keeping_All_Kids_Safe.pdf",
                            "free":true
                        },
                        {
                            "title":"Argent White Paper \n SIEM-Complete Features \n And Benefits",
                            "link":"assets/pdf/Argent_Omega_White_Paper_SIEM-Complete_Features_and_Benefits.pdf"
                        },
                        {
                            "title":"Argent White Paper \n Stoppings Ransomware Permanently",
                            "link":"assets/pdf/Argent_Omega_White_Paper_Stopping_Ransomware_Permanently.pdf"
                        },
                        {
                            "title":"Argent White Paper \n Argent Omega Benefits \n Over Argent AT",
                            "link":"assets/pdf/Argent_Omega_White_Paper_Benefits_Over_Argent_AT.pdf"
                        },
                        {
                            "title":"Argent SIEM-Complete Features And Benefits",
                            "link":"https://www.argent.com/wp-content/uploads/2023/05/Argent_SIEM-Complete_Features_and_Benefits.pdf"
                        },
                        {
                            "title":"Argent SIEM-Complete Facilities",
                            "link":"https://www.argent.com/wp-content/uploads/2023/05/Argent_SIEM-Complete_Facilities.pdf"
                        },
                        {
                            "title": "SCOM VMware",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT___Comparison_Paper_SCOM_VMware_E.pdf"
                        },
                        {
                            "title": "SCOM SharePoint",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT___Comparison_Paper_SCOM_SharePoint_E.pdf"
                        },
                        {
                            "title": "Stopping Ransomware Permanently",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT___Stopping_Ransomware_Permanently_G.pdf"
                        },
                        {
                            "title": "Automatically Monitor CCTV Cameras In Under Four Hours",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER_AUTOMATICALLY_MONITOR_CCTV_CAMERAS_IN_UNDER_FOUR_HOURS_B.pdf"
                        },
                        {
                            "title": "AWS or Azure: Which is better for you?",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER___AWS_Or_Azure_B.pdf"
                        },
                        {
                            "title": "MaaS and CaaS: Monitoring and Compliance as a Service",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER_MaaS_CaaS_D.pdf"
                        },
                        {
                            "title": "Ten Secrets of Job Scheduling",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER__TEN_SECRETS_OF_JOB_SCHEDULING_B.pdf"
                        },
                        {
                            "title": "How To Pass Your CJIS Audit",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER__HOW_TO_PASS_YOUR_CJIS_AUDIT_C.pdf"
                        },
                        {
                            "title": "Stopping Russian and Chinese Hackers",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER__STOPPING_RUSSIAN_AND_CHINESE_HACKERS_B.pdf"
                        },
                        {
                            "title": "All You Need To Know About GDPR",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER__ALL_YOU_NEED_TO_KNOW_ABOUT_GDPR_B.pdf"
                        },
                        {
                            "title": "AWS – Basic Concepts for Argent Customers",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER__AWS_BASIC_CONCEPTS_FOR_ARGENT_CUSTOMERS_B.pdf"
                        },
                        {
                            "title": "AWS – Five Pitfalls of AWS",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/Network_Testing_Labs__Five_AWS_Pitfalls_B.pdf"
                        },
                        {
                            "title": "AWS – Seven Secrets of AWS Security",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER__AWS_SEVEN_SECRETS_OF_AWS_SECURITY_B.pdf"
                        },
                        {
                            "title": "AWS – What Makes Argent for AWS Unique",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER__AWS_WHAT_MAKES_ARGENT_FOR_AWS_UNIQUE_B.pdf"
                        },
                        {
                            "title": "Argent Product Portfolio",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/Argent_Product_Portfolio_B.pdf"
                        },
                        {
                            "title": "Argent Job Scheduler Features and Benefits",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER_AUTOMATE_OR_DIE_C.pdf"
                        },
                        {
                            "title": "Automate Or Die",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER_AUTOMATE_OR_DIE_C.pdf"
                        },
                        {
                            "title": "Monitoring 2,000 to 25,000 Servers with Argent",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER__MONITORING_2_000_TO_25_000_SERVERS.pdf"
                        },
                        {
                            "title": "Why Law Firms Use Argent",
                            "link": "https://www.argent.com/wp-content/uploads/2022/11/ARGENT_WHITE_PAPER__WHY_LAW_FIRMS_USE_ARGENT_E.pdf"
                        }
                    ]';
                    $data = json_decode($jsonData, true);
                    foreach ($data as $item) {
                        $link = $item['link'];
                        $title = $item['title'];
                        $isFree = isset($item['free']) && $item['free'] === true;
                    ?>

                        <a href="<?php echo $link; ?>" target="_blank" class="card-item downloadLink"
                            data-file="assets/pdf/Argent_Omega_White_Paper_Benefits_Over_Argent_AT.pdf">
                            <?php if ($isFree) { ?>
                                <div class="new-badge-1">
                                    Free Product
                                </div>
                            <?php } ?>
                            <div class="flex flex-col gap-2 pt-8">
                                <h3 class="min-h-[105px] text-[#5a6581] text-base leading-[1.2] lg:text-3xl lg:leading-[1.2] font-medium">
                                    <?php echo $title; ?>
                                </h3>
                            </div>
                            <div class="flex items-center justify-between pt-3">
                                <img src="assets/images/pdficon.svg" width="22" height="22" alt="pdficon">
                                <span class="flex items-center gap-1 text-[#ea4335] text-base leading-6 font-semibold">
                                    <img src="assets/images/download.svg" width="14" height="14" alt="download">
                                    Download
                                </span>
                            </div>
                        </a>

                        <?php
                        }
                        ?>
                </div>
            </div>
        </section>
    </main>

    <?php include '../layout/footer.php'; ?>



</body>

</html>