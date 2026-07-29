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
  @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>
        </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @if($errors->any() || session('success'))

<script>
window.addEventListener('load', function () {

    const contact = document.getElementById('contact');

    if(contact){
        contact.scrollIntoView({
            behavior: 'smooth'
        });
    }

});
</script>

@endif
                

                <form action="{{ route('contact.store') }}" method="POST">

                    @csrf


                    <div class="form-grid">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="John Doe" value="{{ old('name') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="john@email.com" value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+91">
                        </div>

                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" value="{{ old('company') }}">
                        </div>

                        <div class="form-group">
                            <label>Service</label>

                            <select name="service" required>

                                <option value="">--Select Service--</option>

                                <option {{ old('service') == 'Website Development' ? 'selected' : '' }}>Website Development</option>

                                <option {{ old('service') == 'ERP Software' ? 'selected' : '' }}>ERP Software</option>

                                <option {{ old('service') == 'CRM Software' ? 'selected' : '' }}>CRM Software</option>

                                <option {{ old('service') == 'Mobile App' ? 'selected' : '' }}>Mobile App</option>

                                <option {{ old('service') == 'SEO' ? 'selected' : '' }}>SEO</option>

                            </select>

                        </div>

                        <div class="form-group">
                            <label>Budget</label>

                            <select name="budget">

                                <option value="">--Select Service--</option>

                                <option {{ old('service') == '₹7k - ₹15k' ? 'selected' : '' }}>₹7k - ₹15k</option>

                                <option {{ old('service') == '₹₹7k - ₹15k' ? 'selected' : '' }}>₹15k - ₹25k</option>

                                <option {{ old('service') == '₹25k - ₹50k' ? 'selected' : '' }}>₹25k - ₹50k</option>

                                <option {{ old('service') == '₹50k - ₹1L' ? 'selected' : '' }}>₹50k - ₹1L</option>

                                <option {{ old('service') == '₹1L - ₹5L' ? 'selected' : '' }}>₹1L - ₹5L</option>

                                <option {{ old('service') == '₹5L+' ? 'selected' : '' }}>₹5L+</option>

                            </select>

                        </div>

                    </div>

                    <div class="form-group">

                        <label>Project Details</label>

                        <textarea rows="6"
                            name="message"
                            placeholder="Describe your project">{{ old('message') }}</textarea>

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

                        📞 +91 6266321454

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