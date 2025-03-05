<?php
/**
 * Template Name: Home Page
 */

get_header();
?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 gap-29">
                <div id="wizard" class="wizard d-flex col-12 gap-4 col-sm-10 gap-sm-29 mx-auto">
                    <div class="col-0 col-md-1"></div>
                    <div class="col-10 col-lg-7 steps-container">
                        <nav aria-label="breadcrumb" class="breadcrumb-nav">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.7069 2.293C10.5194 2.10553 10.2651 2.00021 9.99992 2.00021C9.73475 2.00021 9.48045 2.10553 9.29292 2.293L2.29292 9.293C2.11076 9.4816 2.00997 9.7342 2.01224 9.9964C2.01452 10.2586 2.11969 10.5094 2.3051 10.6948C2.49051 10.8802 2.74132 10.9854 3.00352 10.9877C3.26571 10.99 3.51832 10.8892 3.70692 10.707L3.99992 10.414V17C3.99992 17.2652 4.10528 17.5196 4.29281 17.7071C4.48035 17.8946 4.7347 18 4.99992 18H6.99992C7.26514 18 7.51949 17.8946 7.70703 17.7071C7.89456 17.5196 7.99992 17.2652 7.99992 17V15C7.99992 14.7348 8.10528 14.4804 8.29281 14.2929C8.48035 14.1054 8.7347 14 8.99992 14H10.9999C11.2651 14 11.5195 14.1054 11.707 14.2929C11.8946 14.4804 11.9999 14.7348 11.9999 15V17C11.9999 17.2652 12.1053 17.5196 12.2928 17.7071C12.4803 17.8946 12.7347 18 12.9999 18H14.9999C15.2651 18 15.5195 17.8946 15.707 17.7071C15.8946 17.5196 15.9999 17.2652 15.9999 17V10.414L16.2929 10.707C16.4815 10.8892 16.7341 10.99 16.9963 10.9877C17.2585 10.9854 17.5093 10.8802 17.6947 10.6948C17.8801 10.5094 17.9853 10.2586 17.9876 9.9964C17.9899 9.7342 17.8891 9.4816 17.7069 9.293L10.7069 2.293Z"
                                            fill="#9CA3AF" />
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="step" data-step="1">Contact Info</li>
                                <li class="breadcrumb-item" data-step="2">Quantity</li>
                                <li class="breadcrumb-item" data-step="3">Price</li>
                                <li class="breadcrumb-item" data-step="4">Done</li>
                            </ol>
                        </nav>
                        <div class="step" data-step="1">
                            <h2 class="step-title">Contact Info</h2>

                            <div class="d-flex flex-column gap-19 mb-19">
                                <div class="d-flex flex-row gap-29 align-items-center ">
                                    <label class="m-0 col-2 text-end">Name</label>
                                    <div class="input-group input-group-lg col">
                                        <input type="text" class="form-control name-input"
                                            aria-label="Sizing example input" required
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>
                                <div class="d-flex flex-row gap-29 align-items-center ">
                                    <label class="m-0 col-2 text-end">Email</label>
                                    <div class="input-group input-group-lg col">
                                        <input type="email" class="form-control email-input"
                                            aria-label="Sizing example input" required
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>
                                <div class="d-flex flex-row gap-29 align-items-center ">
                                    <label class="m-0 col-2 text-end">Phone</label>
                                    <div class="input-group input-group-lg col">
                                        <input type="tel" class="form-control phone-input"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>

                            </div>
                            <button class="next-btn btn btn-custom btn-custom-blue contact-btn"
                                data-next="2">Continue</button>
                        </div>

                        <div class="step" data-step="2" style="display: none;">
                            <h2 class="step-title">Quantity</h2>

                            <div class="d-flex flex-column gap-19 mb-19">
                                <div class="d-flex flex-row gap-29 align-items-center ">
                                    <label class="m-0 col-2 text-end">Quantity</label>
                                    <div class="input-group input-group-lg col">
                                        <input type="number" min="1" max="1000" maxlength="4"
                                            class="form-control quantity-input" required
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>

                            </div>
                            <button class="next-btn btn btn-custom btn-custom-blue quantity-btn"
                                data-next="3">Continue</button>
                            <button class="prev-btn btn btn-custom btn-custom-white back-info" data-prev="1">&larr;
                                Back</button>
                        </div>

                        <div class="step" data-step="3" style="display: none;">
                            <h2 class="step-title">Price</h2>

                            <div class="d-flex flex-column gap-19 mb-19">
                                <p class="price"></p>

                            </div>
                            <button class="next-btn btn btn-custom btn-custom-blue send-email" data-next="4">Send to
                                Email</button>
                            <button class="prev-btn btn btn-custom btn-custom-white back-quantity" data-prev="2">&larr;
                                Back</button>
                        </div>

                        <div class="step" data-step="4.1" style="display: none;">
                            <h2>Done</h2>
                            <p>✅ Your email was send successfully</p>
                            <button class="next-btn btn btn-custom btn-custom-blue start-again" data-step="4.1"
                                data-next="1">Start
                                again
                                &larr;</button>

                        </div>
                        <div class="step" data-step="4.2" style="display: none;">
                            <h2>Done</h2>
                            <p>⚠️ We cannot send you email right now. Use alternative way to contact us </p>
                            <button class="next-btn btn btn-custom btn-custom-blue start-again" data-step="4.2"
                                data-next="1">Start
                                again
                                &larr;</button>

                        </div>
                    </div>
                </div>
                <div class="d-flex col-12 gap-4 col-sm-10 gap-sm-29 mx-auto">
                    <div class="col-0 col-md-1"></div>
                    <div class="col-10 col-lg-7">
                        <?php echo do_shortcode('[r_test title="Title"]This is the description[/r_test]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>