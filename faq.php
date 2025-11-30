<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Beyanco || FAQ</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">
</head>

<body class="cj90m c7e3b cisrt c7wkd c2gcs ce7fn clmvh">

    <!-- Page wrapper -->
    <div class="cbvui chs6j c8gx0 ckwv3 cjycj cezsk">

        <!-- Bg coloured shapes -->
        <div class="cwysf cs1uv cojlt c9v7h cvhgl cr8aa cetkn cag0k" aria-hidden="true">
            <div class="c5bik c9b4s c0oy8 cmix3 cj04y ckrsz cje3v csstg cevtx cv8gl cyy6y cr8aa c98s8 c3yb8"></div>
            <div
                class="cfwzm chupg c9b4s c0oy8 cmix3 cj04y ckrsz csstg c8m5q cevtx cv8gl cyy6y cr8aa cjgsx cnbs3 c3yb8">
            </div>
            <div
                class="csla3 chupg c9b4s c0oy8 cmix3 cj04y ckrsz csstg c8m5q cevtx cv8gl cyy6y cr8aa c110f c9hsq cggi5">
            </div>
            <div
                class="cs09d czbwe cd03c c9b4s c0oy8 cmix3 cj04y ckrsz csstg cevtx cv8gl cc2fz cyy6y cr8aa c8zmq cwoae">
            </div>
            <div
                class="cpxaw crjok c9b4s c0oy8 cmix3 cj04y ckrsz csstg c8m5q cevtx cv8gl cpsm9 cgtcx cc1h8 cr8aa c2svq">
            </div>
            <div
                class="c55mv cpvgd c9b4s c0oy8 cmix3 cj04y ckrsz csstg c8m5q cevtx cv8gl cc2fz cyy6y cr8aa cubdc cggi5">
            </div>
        </div>

        <!-- Vertical lines -->
        <div class="cwysf cs1uv cojlt c9v7h cvhgl cr8aa cag0k" aria-hidden="true">
            <!-- Left side -->
            <div
                class="c9dpd c30rf crc45 c06dl cd91y czb12 c2wd7 cd8xp cpue7 cevtx ch88u cr5hf cxgoq c6ppr cjkk2 chsmj">
            </div>
            <!-- Right side -->
            <div
                class="c9dpd c30rf crc45 c06dl cd91y czb12 c2wd7 cd8xp cpue7 cevtx ch88u cr5hf cvq9r cxgoq cj85p c6ppr">
            </div>
        </div>

        <?php include 'assets/includes/header.php'; ?>

        <script>
            // Toggle dark class on body when theme switch changes
            document.addEventListener('DOMContentLoaded', function() {
                const switchInput = document.getElementById('light-switch');
                if (!switchInput) return;

                // Apply saved preference
                if (localStorage.getItem('theme') === 'dark') {
                    document.body.classList.add('dark');
                    switchInput.checked = true;
                }

                switchInput.addEventListener('change', function() {
                    if (this.checked) {
                        document.body.classList.add('dark');
                        localStorage.setItem('theme', 'dark');
                    } else {
                        document.body.classList.remove('dark');
                        localStorage.setItem('theme', 'light');
                    }
                });
            });
        </script>

        <!-- Page content -->
        <main class="cgnjb">

            <section>
                <div class="c5fcz cnmmr cg498 cw2nq">
                    <div class="cy6zq crh5c">

                        <div class="cpthp cn22v czrhe cs10o">
                            <div class="c9pd1">

                                <div
                                    class="c0drb cpgkc ckhko c26j7 c2wd7 cl110 cd8xp ctanz cqckm conig cc8zc c0zgo c3927 chwso clw5z ckuy9 cjewx cx8zz ckwv3 cb7i0 cj1vz cezsk">
                                    <div
                                        class="cxo8x cw1gd cmkro cbc1e cyfzq cevtx cshco cv8gl cgrfs cxcm6 cxpc2 ccjiw c1l9r ckwv3 cryv2 cc7et cf0cr c02c5">
                                        <!-- Border with dots in corners -->
                                        <div class="c3cy3 cpoza c4xyw cauvd cehp5 chqy8 c3ehf cks6d c8z9n crgvw c2z22 cr2ij cpue7 c8arv cevtx cr5hf cw7re cxgoq cjkk2 c1qs0 ckoug cpnw7 cr8aa cag0k"
                                            aria-hidden="true"></div>
                                        <span class="c0cnt ce627 cyiq9 ccjbb cfatl c2gcs ckwv3">Quick Answers</span>
                                    </div>
                                </div>

                                <h1 class="c0cnt ce627 cwr74 cfatl crlpf cbwmu c2gcs cr5d0 cvxf3 ch47f casec">Let's talk
                                    about Beyanco</h1>
                                <p class="cauea cgrfs cs94t">
                                    Here we provide answers for the most common questions. From registering and
                                    accessing your account to payments and paid subscriptions.
                                </p>

                            </div>
                        </div>

                        <!-- Accordion -->
                        <div class="cpthp czrhe">
                            <div class="c1w0d">
                                <!-- Accordion item -->
                                <div x-data="{ expanded: false }"
                                    class="cmyvz c0cnt c3c25 coyl6 cr0m7 cla1c cljmq ccjiw cf0cr ciz85">
                                    <h2>
                                        <button id="faqs-title-01"
                                            class="cj90m c45gv c2gcs chwso cxpc2 crccf coe0p cezsk crh5c c4l07"
                                            @click="expanded = !expanded" :aria-expanded="expanded"
                                            aria-controls="faqs-text-01">
                                            <span>What is this platform about?</span>
                                            <span
                                                class="cw06u c3927 chwso cxhhk cnguu c81ef cryv2 ct1ec cezsk cwq23 ccuy5">
                                                <svg class="cyq8e cgvkt" width="10" height="6"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity=".72"
                                                        d="m2 .586 3 3 3-3L9.414 2 5.707 5.707a1 1 0 0 1-1.414 0L.586 2 2 .586Z"
                                                        class="c9f5h cyxod cuee8 cpt6h ckl4f"
                                                        :class="{'c620m': expanded}"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01"
                                        class="c7ha7 chs6j cozto c63w3 cn5cf cm3u7 cc7et c2u0b"
                                        :class="expanded ? 'ck6q3 cleka' : 'catmx clwi2'">
                                        <div class="chs6j">
                                            <p class="crh5c cvgj5">
                                                Our tool lets you instantly generate AI-powered interior design ideas — upload a photo of your space, choose your style, and get realistic design renders in seconds.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion item -->
                                <div x-data="{ expanded: false }"
                                    class="cmyvz c0cnt c3c25 coyl6 cr0m7 cla1c cljmq ccjiw cf0cr ciz85">
                                    <h2>
                                        <button id="faqs-title-02"
                                            class="cj90m c45gv c2gcs chwso cxpc2 crccf coe0p cezsk crh5c c4l07"
                                            @click="expanded = !expanded" :aria-expanded="expanded"
                                            aria-controls="faqs-text-02">
                                            <span>When will the platform launch?</span>
                                            <span
                                                class="cw06u c3927 chwso cxhhk cnguu c81ef cryv2 ct1ec cezsk cwq23 ccuy5">
                                                <svg class="cyq8e cgvkt" width="10" height="6"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity=".72"
                                                        d="m2 .586 3 3 3-3L9.414 2 5.707 5.707a1 1 0 0 1-1.414 0L.586 2 2 .586Z"
                                                        class="c9f5h cyxod cuee8 cpt6h ckl4f"
                                                        :class="{'c620m': expanded}"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01"
                                        class="c7ha7 chs6j cozto c63w3 cn5cf cm3u7 cc7et c2u0b"
                                        :class="expanded ? 'ck6q3 cleka' : 'catmx clwi2'">
                                        <div class="chs6j">
                                            <p class="crh5c cvgj5">
                                                We’re launching next week! Joining the waitlist gives you early access and exclusive launch perks before the public release.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion item -->
                                <div x-data="{ expanded: true }"
                                    class="cmyvz c0cnt c3c25 coyl6 cr0m7 cla1c cljmq ccjiw cf0cr ciz85">
                                    <h2>
                                        <button id="faqs-title-03"
                                            class="cj90m c45gv c2gcs chwso cxpc2 crccf coe0p cezsk crh5c c4l07"
                                            @click="expanded = !expanded" :aria-expanded="expanded"
                                            aria-controls="faqs-text-03">
                                            <span>Do I need any design experience to use it?</span>
                                            <span
                                                class="cw06u c3927 chwso cxhhk cnguu c81ef cryv2 ct1ec cezsk cwq23 ccuy5">
                                                <svg class="cyq8e cgvkt" width="10" height="6"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity=".72"
                                                        d="m2 .586 3 3 3-3L9.414 2 5.707 5.707a1 1 0 0 1-1.414 0L.586 2 2 .586Z"
                                                        class="c9f5h cyxod cuee8 cpt6h ckl4f"
                                                        :class="{'c620m': expanded}"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01"
                                        class="c7ha7 chs6j cozto c63w3 cn5cf cm3u7 cc7et c2u0b"
                                        :class="expanded ? 'ck6q3 cleka' : 'catmx clwi2'">
                                        <div class="chs6j">
                                            <p class="crh5c cvgj5">
                                                Not at all. Our AI is built for everyone — from homeowners and renters to interior designers, real estate builders, and realtors. Just upload, customize, and visualize.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion item -->
                                <div x-data="{ expanded: false }"
                                    class="cmyvz c0cnt c3c25 coyl6 cr0m7 cla1c cljmq ccjiw cf0cr ciz85">
                                    <h2>
                                        <button id="faqs-title-04"
                                            class="cj90m c45gv c2gcs chwso cxpc2 crccf coe0p cezsk crh5c c4l07"
                                            @click="expanded = !expanded" :aria-expanded="expanded"
                                            aria-controls="faqs-text-04">
                                            <span>Is it free to join the waitlist?</span>
                                            <span
                                                class="cw06u c3927 chwso cxhhk cnguu c81ef cryv2 ct1ec cezsk cwq23 ccuy5">
                                                <svg class="cyq8e cgvkt" width="10" height="6"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity=".72"
                                                        d="m2 .586 3 3 3-3L9.414 2 5.707 5.707a1 1 0 0 1-1.414 0L.586 2 2 .586Z"
                                                        class="c9f5h cyxod cuee8 cpt6h ckl4f"
                                                        :class="{'c620m': expanded}"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01"
                                        class="c7ha7 chs6j cozto c63w3 cn5cf cm3u7 cc7et c2u0b"
                                        :class="expanded ? 'ck6q3 cleka' : 'catmx clwi2'">
                                        <div class="chs6j">
                                            <p class="crh5c cvgj5">
                                                Yes, it’s completely free. Signing up simply secures your early-access spot and gives you first dibs on any beta features and launch discounts.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Newsletter -->
            <section>
                <div class="c5fcz cg498">
                    <div class="cy6zq crh5c">

                        <div class="cpthp czrhe">
                            <div class="c9v3y ctu16 cmpui cvq6c c9pd1 c6v8r c07f0 cs10o cjqio">
                                <h2 class="c0cnt ce627 cwr74 cfatl crlpf cbwmu c2gcs cyt4c cvxf3 cn474 casec">Become
                                    part of our community</h2>
                            </div>
                        </div>

                        <div
                            class="c1t8r c330t cfs2v c1upr c2wd7 cl110 cd8xp ctanz cqckm conig cc8zc c0zgo c3927 ciay6 c7a79 chwso clw5z cjewx ckwv3 cgio7 c9l48 cezsk">
                            <div class="cgc2y c81ef czrhe coe0p">
                                <form class="ckwv3">

                                    <!-- Border with dots in corners -->
                                    <div class="cq4r1 cfdqj ck5ws c5pov cehp5 chqy8 cym3j cxpxq cvvig c0cnt cba0k crgvw ci2tu c2z22 csmr0 cr2ij cpue7 c26dl cevtx cr5hf cxgoq cjkk2 c1qs0 ccjiw cr8aa clot7 cag0k"
                                        aria-hidden="true"></div>

                                    <div class="cacgm">
                                        <div>
                                            <label class="cz99u" for="email">Email</label>
                                            <div class="ckwv3">
                                                <div class="cis7l cwysf cud52 chwso c9v7h cr8aa cu4yo cezsk cyi7p">
                                                    <svg class="cdyx3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="14" fill="none">
                                                        <path
                                                            d="M14 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm0 12H2V5.723l5.504 3.145a.998.998 0 0 0 .992 0L14 5.723V12Zm0-8.58L8 6.849 2 3.42V2h12v1.42Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <input id="email" class="coyoz cc7et coe0p cyujy cjygq" type="email"
                                                    placeholder="Your email..." required="">
                                            </div>
                                        </div>
                                        <div>
                                            <button class="cg4ff czbbd cfhsj czmlk ceto1 ccs7d coe0p chuxb">Join The
                                                Waitlist</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="cpthp czrhe">
                            <div class="c9pd1">
                                <!-- Avatars -->
                                <ul class="c3927 cazyq c5xjj cezsk">
                                    <li>
                                        <img class="cxhhk" src="assets/images/avatar-01.jpg" width="32" height="32"
                                            alt="Avatar 01">
                                    </li>
                                    <li>
                                        <img class="cxhhk" src="assets/images/avatar-02.jpg" width="32" height="32"
                                            alt="Avatar 02">
                                    </li>
                                    <li>
                                        <img class="cxhhk" src="assets/images/avatar-03.jpg" width="32" height="32"
                                            alt="Avatar 03">
                                    </li>
                                    <li>
                                        <img class="cxhhk" src="assets/images/avatar-04.jpg" width="32" height="32"
                                            alt="Avatar 04">
                                    </li>
                                    <li>
                                        <img class="cxhhk" src="assets/images/avatar-05.png" width="32" height="32"
                                            alt="Avatar 05">
                                    </li>
                                    <li>
                                        <img class="cxhhk" src="assets/images/avatar-06.jpg" width="32" height="32"
                                            alt="Avatar 05">
                                    </li>
                                </ul>
                                <p class="ckasv cc7et">Join the <span class="cj90m cgrfs cxpc2">150+</span> members
                                    who have already signed up.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <?php include 'assets/includes/footer.php'; ?>


    </div>

    <script src="assets/js/vendor/inner.min.js" defer=""></script>
    <script src="assets/js/main.js"></script>



    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"59cc17d45d734f9ba118c63036ab1b84","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>

    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
        } else {
            document.querySelector('html').classList.add('dark');
        }
    </script>

</body>

</html>