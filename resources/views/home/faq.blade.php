<div class="p-4 text-light faq" style="background-color: rgb(230, 227, 227);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-14 col-12">
                <div class="mb-4 text-center">
                    <h2 class="text-dark" style="margin-top: 20px;">Have questions?</h2>
                </div>
                <div id="faqAccordion" class="accordion">
                    <!-- FAQ Question 1 -->
                    <div class="border-0 card faq-card" style="background-color: rgb(230, 227, 227);">
                        <div class="p-2 card-header d-flex justify-content-between align-items-center border-bottom" id="faqHeading1" style="background-color: inherit;">
                            <h5 class="mb-0">
                                <button class="p-0 btn btn-link text-dark collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                                    Are you trying to sell me something?
                                </button>
                            </h5>
                            <span class="toggle-icon">+</span>
                        </div>
                        <div id="faqCollapse1" class="collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                            <div class="card-body text-dark">
                                Never! We don’t sell products and we’ll never push you into buying anything. Our only goal is to help connect you with relevant software options. What you purchase (or not) is up to you.
                            </div>
                        </div>
                        <hr>
                    </div>
                    <!-- FAQ Question 2 -->
                    <div class="border card faq-card" style="background-color: rgb(230, 227, 227);">
                        <div class="p-2 card-header d-flex justify-content-between align-items-center border-bottom" id="faqHeading2" style="background-color: inherit;">
                            <h5 class="mb-0">
                                <button class="p-0 btn btn-link text-dark collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    Are your reviews written by real people?
                                </button>
                            </h5>
                            <span class="toggle-icon">+</span>
                        </div>
                        <div id="faqCollapse2" class="collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                            <div class="card-body text-dark">
                                You bet. Every review we collect is written by a real person just like you, and every single one is vetted and verified by our reviews team.
                            </div>
                        </div>
                        <hr>
                    </div>
                    <!-- FAQ Question 3 -->
                    <div class="border card faq-card" style="background-color: rgb(230, 227, 227);">
                        <div class="p-2 card-header d-flex justify-content-between align-items-center border-bottom" id="faqHeading3" style="background-color: inherit;">
                            <h5 class="mb-0">
                                <button class="p-0 btn btn-link text-dark collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Who are your advisors?
                                </button>
                            </h5>
                            <span class="toggle-icon">+</span>
                        </div>
                        <div id="faqCollapse3" class="collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                            <div class="card-body text-dark">
                                Our team of advisors is based out of Austin, Texas. They’re friends, coworkers, siblings, parents, dog owners, music listeners, park goers, beer lovers and software selection specialists! Our software selection advisors specialize in certain industries, including construction, retail, medical and more, which means you’ll always be paired up with someone who knows your market. Our advisors love helping business like yours thrive!
                            </div>
                        </div>
                        <hr>   
                    </div>
                    <!-- FAQ Question 4 -->
                    <div class="border card faq-card" style="background-color: rgb(230, 227, 227);">
                        <div class="p-2 card-header d-flex justify-content-between align-items-center border-bottom" id="faqHeading4" style="background-color: inherit;">
                            <h5 class="mb-0">
                                <button class="p-0 btn btn-link text-dark collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    Will l get spammed with phone calls?
                                </button>
                            </h5>
                            <span class="toggle-icon">+</span>
                        </div>
                        <div id="faqCollapse4" class="collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                            <div class="card-body text-dark">
                                We’ll reach out to connect, but we’re definitely not here to spam you. If you’d prefer a specific time to connect, we’ve made it easy to book a call on your schedule. Pick when works best for you.
                            </div>
                        </div>
                        <hr>
                    </div>
                    <!-- FAQ Question 5 -->
                    <div class="border card faq-card" style="background-color: rgb(230, 227, 227);">
                        <div class="p-2 card-header d-flex justify-content-between align-items-center border-bottom" id="faqHeading5" style="background-color: inherit;">
                            <h5 class="mb-0">
                                <button class="p-0 btn btn-link text-dark collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                    Can I list my product on your website?
                                </button>
                            </h5>
                            <span class="toggle-icon">+</span>
                        </div>
                        <div id="faqCollapse5" class="collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                            <div class="card-body text-dark">
                                We’d love to add you to our database. Software vendors click here!
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.collapse').forEach(function(collapseElement) {
        collapseElement.addEventListener('shown.bs.collapse', function() {
            var icon = this.previousElementSibling.querySelector('.toggle-icon');
            icon.textContent = '-';
            this.parentElement.classList.add('expanded');
        });

        collapseElement.addEventListener('hidden.bs.collapse', function() {
            var icon = this.previousElementSibling.querySelector('.toggle-icon');
            icon.textContent = '+';
            this.parentElement.classList.remove('expanded');
        });
    });
</script>
