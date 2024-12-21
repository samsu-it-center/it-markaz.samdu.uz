@extends('layouts.app')

@section('content')

        <!-- Shior Section -->
        <section class="shior-section">
            <h2>Your Vision, Our Commitment</h2>
            <p>We are dedicated to bringing your dreams to life with exceptional service and expertise.</p>
        </section>

        <!-- Four Columns Section -->
        <section class="four-cols">
            <div class="col">
                <h3>Quality</h3>
                <p>We provide the best quality service for your needs.</p>
            </div>
            <div class="col">
                <h3>Innovation</h3>
                <p>Constantly evolving with innovative solutions.</p>
            </div>
            <div class="col">
                <h3>Support</h3>
                <p>Always here to support you at every step.</p>
            </div>
            <div class="col">
                <h3>Trust</h3>
                <p>Building lasting relationships based on trust.</p>
            </div>
        </section>

        <!-- Goals and Objectives Section -->
        <section class="goals-section">
            <div class="goal">
                <h3>Goal 1</h3>
                <p>Achieving customer satisfaction with every project.</p>
            </div>
            <div class="goal">
                <h3>Goal 2</h3>
                <p>Innovating and improving our services constantly.</p>
            </div>
            <div class="goal">
                <h3>Goal 3</h3>
                <p>Creating lasting relationships with our clients.</p>
            </div>
            <div class="goal">
                <h3>Goal 4</h3>
                <p>Expanding our reach globally.</p>
            </div>
            <div class="goal">
                <h3>Goal 5</h3>
                <p>Offering tailored solutions for every client.</p>
            </div>
            <div class="goal">
                <h3>Goal 6</h3>
                <p>Continuously improving our processes.</p>
            </div>
        </section>

        <!-- Animation Section -->
        <section class="animate-section">
            <h2>Our Promise</h2>
            <p>Delivering excellence in everything we do, with a focus on the future.</p>

            <div class="animate-cols" style="display: flex; justify-content: space-around; margin-top: 40px;">
                <div class="animate-col"
                     style="flex: 1; padding: 20px; background-color: #ff7e5f; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                    <h3>Quality</h3>
                    <p>We ensure the highest standards in everything we do.</p>
                </div>
                <div class="animate-col"
                     style="flex: 1; padding: 20px; background-color: #feb47b; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                    <h3>Innovation</h3>
                    <p>Driven by new ideas and cutting-edge technologies.</p>
                </div>
                <div class="animate-col"
                     style="flex: 1; padding: 20px; background-color: #ff7e5f; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                    <h3>Support</h3>
                    <p>Your success is our priority with ongoing support.</p>
                </div>
                <div class="animate-col"
                     style="flex: 1; padding: 20px; background-color: #feb47b; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                    <h3>Trust</h3>
                    <p>Building relationships based on mutual trust and integrity.</p>
                </div>
            </div>
        </section>

 <!-- Contact Information Section -->
<section class="contact-section" style="background-color: #f4f4f4; padding: 50px 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
    <h2 style="text-align: center; color: #333; margin-bottom: 30px;">Contact Us</h2>

    <!-- Contact Info -->
    <div class="contact-info" style="
        display: flex;
        flex-wrap: wrap; /* Ustma-ust chiqmasligi uchun qo'shildi */
        justify-content: space-between; /* Elementlar orasidagi bo'shliqni tenglashtirish */
        gap: 20px; /* Elementlar orasidagi bo'shliq */
        margin-bottom: 30px;
    ">
        <div class="item" style="
            flex: 1 1 30%; /* Har bir bo'lim uchun kenglikni belgilash */
            max-width: 300px; /* Maksimal kenglikni cheklash */
            padding: 20px;
            text-align: center;
            background-color: #ff7e5f;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        ">
            <i class="fas fa-phone-alt" style="font-size: 2rem; color: white;"></i>
            <h3 style="color: white; margin-top: 10px;">Phone</h3>
            <p style="color: white;">(+123) 456-7890</p>
        </div>
        <div class="item" style="
            flex: 1 1 30%; /* Har bir bo'lim uchun kenglikni belgilash */
            max-width: 300px; /* Maksimal kenglikni cheklash */
            padding: 20px;
            text-align: center;
            background-color: #feb47b;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        ">
            <i class="fas fa-envelope" style="font-size: 2rem; color: white;"></i>
            <h3 style="color: white; margin-top: 10px;">Email</h3>
            <p style="color: white;">contact@website.com</p>
        </div>
        <div class="item" style="
            flex: 1 1 30%; /* Har bir bo'lim uchun kenglikni belgilash */
            max-width: 300px; /* Maksimal kenglikni cheklash */
            padding: 20px;
            text-align: center;
            background-color: #ff7e5f;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        ">
            <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: white;"></i>
            <h3 style="color: white; margin-top: 10px;">Location</h3>
            <p style="color: white;">123 Main Street, City, Country</p>
        </div>
    </div>
</section>


        <!-- Social Media Section -->
        <div class="social-media" style="text-align: center; margin-top: 20px;">
            <i class="fab fa-facebook-square"
               style="font-size: 2rem; color: #ff7e5f; margin: 0 15px; transition: transform 0.5s ease;"></i>
            <i class="fab fa-twitter-square"
               style="font-size: 2rem; color: #ff7e5f; margin: 0 15px; transition: transform 0.5s ease;"></i>
            <i class="fab fa-linkedin"
               style="font-size: 2rem; color: #ff7e5f; margin: 0 15px; transition: transform 0.5s ease;"></i>
            <i class="fab fa-instagram"
               style="font-size: 2rem; color: #ff7e5f; margin: 0 15px; transition: transform 0.5s ease;"></i>
        </div>

        </section>


<section class="contact-section"
         style="background-color: #ff7e5f; padding: 50px 20px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); margin: 24px 5px;">
    <div class="contact-row"
         style="display: flex; justify-content: space-between; align-items: flex-start; color: white; flex-wrap: wrap;">
        <!-- Shior Section (Left Column) -->
        <div class="contact-shior" style="flex: 1 1 48%; margin-right: 20px;">
            <h2>Your Vision, Our Commitment</h2>
            <p>We are dedicated to bringing your dreams to life with exceptional service and expertise.</p>
        </div>

        <!-- Contact Form Section (Right Column) -->
        <div class="contact-form"
             style="flex: 1 1 48%; max-width: 600px; background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
            <h2 style="color: #ff7e5f;">Contact Us</h2>
            <form>
                <input type="text" name="name" placeholder="Your Name" required
                       style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: none;">
                <input type="email" name="email" placeholder="Your Email" required
                       style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: none;">
                <textarea name="message" placeholder="Your Message" required
                          style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: none;"></textarea>
                <button type="submit"
                        style="background-color: #ff7e5f; color: white; padding: 15px 30px; border: none; border-radius: 5px; font-size: 1.2rem; cursor: pointer;">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>



@endsection
