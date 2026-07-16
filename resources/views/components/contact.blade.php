<section class="contact section" id="contact">

    <div class="container">

        <div class="section-heading text-center" data-aos="fade-up">

            <span class="section-badge">
                CONTACT US
            </span>

            <h2>
                Let's Build Your Next Digital Product
            </h2>

            <p>
                Tell us about your project. We'll get back to you within 24 hours.
            </p>

        </div>

        <div class="contact-wrapper">

            <!-- Left Side -->

            <div class="contact-form-card" data-aos="fade-right">

                <form action="{{ route('contact.store') }}" method="POST">

                    @csrf

                    <div class="form-grid">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="John Doe">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="john@email.com">
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="+91">
                        </div>

                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company">
                        </div>

                        <div class="form-group">
                            <label>Service</label>

                            <select name="service">

                                <option>Website Development</option>

                                <option>ERP Software</option>

                                <option>CRM Software</option>

                                <option>Mobile App</option>

                                <option>SEO</option>

                            </select>

                        </div>

                        <div class="form-group">
                            <label>Budget</label>

                            <select name="budget">

                                <option>₹25k - ₹50k</option>

                                <option>₹50k - ₹1L</option>

                                <option>₹1L - ₹5L</option>

                                <option>₹5L+</option>

                            </select>

                        </div>

                    </div>

                    <div class="form-group">

                        <label>Project Details</label>

                        <textarea rows="6"
                            name="message"
                            placeholder="Describe your project"></textarea>

                    </div>

                    <button class="btn-primary-custom">

                        Send Message →

                    </button>

                </form>

            </div>

            <!-- Right Side -->

            <div class="contact-info" data-aos="fade-left">

                <div class="info-card">

                    <h3>Contact Information</h3>

                    <div class="info-item">

                        📍 Bhilai, Chhattisgarh

                    </div>

                    <div class="info-item">

                        📞 +91 9876543210

                    </div>

                    <div class="info-item">

                        📧 info@mopaltechnologies.com

                    </div>

                    <div class="info-item">

                        🕒 Monday - Saturday

                    </div>

                </div>

                <div class="map-card">

                    <iframe
                        src="https://maps.google.com/maps?q=Bhilai&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        loading="lazy">
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</section>