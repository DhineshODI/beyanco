        <!-- Site header -->
        <header class="c9v3y crbyi c7hiy cvq6c cd5ux cr8aa cligc ctdcn coe0p crj7h c2dja casec">
            <div class="cy6zq crh5c">
                <div class="cpthp czrhe">
                    <div class="cvvig cba0k c04cg c45gv c5plh chwso cfctz ccjiw ckwv3 ckqfb cf0cr cezsk c2svq c02c5">

                        <!-- Border with dots in corners -->
                        <div class="ch4rd cetk9 couhs c53q4 cehp5 chqy8 cukhb cx8c7 cippd crgvw c2z22 cv89o cr2ij cpue7 crc6r cevtx cr5hf cxgoq cjkk2 c1qs0 ckoug cpnw7 cr8aa cag0k"
                            aria-hidden="true"></div>

                        <!-- Site branding -->
                        <div class="ctuhr">
                            <!-- Logo -->
                            <a href="index.php">
                                <!-- Light theme logo -->
                                <div class="beyanco-logo light-logo">
                                    <img src="assets/images/beyanco-logo.svg" alt="Beyanco Logo" width="200px">
                                </div>
                                <!-- Dark theme logo -->
                                <div class="beyanco-logo dark-logo">
                                    <img src="assets/images/beyanco-white-logo.svg" alt="Beyanco Logo" width="200px">
                                </div>
                            </a>
                        </div>
                        <!-- Navigation links -->
                        <nav class="c3927 cezsk">
                            <ul class="chwso cxpc2 cmj1h cc7et cezsk">
                                <!-- <li>
                                    <a class="cpvyo cv7b2 cj90m c2gcs ccjiw cjnro c02c5" href="update.php">Updates</a>
                                </li> -->
                                <li>
                                    <a class="cpvyo cv7b2 cj90m cgvn6 c2gcs ccjiw cjnro c02c5" href="faq.php">FAQ</a>
                                </li>
                                <li>
                                    <a class="cpvyo cv7b2 cj90m cgvn6 c2gcs ccjiw cjnro c02c5"
                                        href="contact.php">Contact us</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Dark / Light mode toggle -->
                        <div class="chso3 ctuhr cezsk">
                            <input type="checkbox" name="light-switch" id="light-switch" class="light-switch cz99u">
                            <label class="c9yqy co456" for="light-switch">
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="cdp5p crwfp"
                                        d="M9 0H7v2h2V0ZM14.294 3.052 12.88 1.637 11.466 3.05l1.413 1.414 1.415-1.413ZM16 7h-2v2h2V7ZM11.535 13.02l1.415 1.413 1.414-1.415-1.415-1.413-1.414 1.414ZM9 14H7v2h2v-2ZM1.566 12.948l1.414 1.415 1.415-1.413-1.414-1.415-1.415 1.413ZM2 7H0v2h2V7ZM4.465 3.12 3.05 1.707 1.636 3.12l1.415 1.414L4.465 3.12Z">
                                    </path>
                                    <path class="c7cme cksqw" d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z">
                                    </path>
                                </svg>
                                <span class="cz99u">Switch to light / dark version</span>
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </header>


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