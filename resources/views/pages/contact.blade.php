@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div
            style="background-color: darkgreen ; color: #fff; padding: 10px; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 15px;">
           <h5 class="text-center text-white">Xabaringiz muvaffaqiyatli yuborildi.</h5>
        </div>
    @endif


    @php
        $lang = App::getLocale();
    @endphp



    <!-- Contact Information Section -->
    <section class="contact-section"
             style="background-color: #f4f4f4; padding: 50px 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <h2 style="text-align: center; color: #333; margin-bottom: 30px;">Bog'lanish</h2>

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
            background-color: #004a9f;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        ">
                <i class="fas fa-phone-alt" style="font-size: 2rem; color: white;"></i>
                <h3 style="color: white; margin-top: 10px;">Raqam</h3>
                <p style="color: white;"><a href="tel:+998937286768" style="color: white; text-decoration: none;">+998-93-728-68-67</a>
                </p>
            </div>
            <div class="item" style="
            flex: 1 1 30%; /* Har bir bo'lim uchun kenglikni belgilash */
            max-width: 300px; /* Maksimal kenglikni cheklash */
            padding: 20px;
            text-align: center;
            background-color: #004a9f;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        ">
                <i class="fas fa-envelope" style="font-size: 2rem; color: white;"></i>
                <h3 style="color: white; margin-top: 10px;">Email</h3>
                <p style="color: white;">
                    <a href="mailto:itmarkazsam@gmail.com" style="color: white; text-decoration: none;">itmarkazsam@gmail.com</a>
                </p>
            </div>
            <div class="item" style="
            flex: 1 1 30%; /* Har bir bo'lim uchun kenglikni belgilash */
            max-width: 300px; /* Maksimal kenglikni cheklash */
            padding: 20px;
            text-align: center;
            background-color: #004a9f;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        ">
                <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: white;"></i>
                <h3 style="color: white; margin-top: 10px;">Joylashuv</h3>
                <p style="color: white;">Namozgoh ko'chasi 88-uy</p>
            </div>
        </div>
    </section>


    </section>


    <section class="contact-section"
             style="background-color: #004a9f; padding: 50px 20px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); margin: 24px 5px;">
        <div class="contact-row"
             style="display: flex; justify-content: space-between; align-items: flex-start; color: white; flex-wrap: wrap;">
            <!-- Shior Section (Left Column) -->
            <div class="contact-shior" style="flex: 1 1 48%; margin-right: 20px;">
                <h2 class="text-white">Sizning Maqsadlaringiz, Bizning Mas'uliyatimiz</h2>
                <p class="text-white">Biz sizning orzularingizni amalga oshirishda ajoyib xizmat va yuqori malakali
                    tajribamiz bilan sizni qo'llab-quvvatlashga tayyormiz.</p>
            </div>

            <!-- Contact Form Section (Right Column) -->
            <div class="contact-form"
                 style="flex: 1 1 48%; max-width: 600px; background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border: #004a9f;">
                <h2 style="color: #004a9f;">Bog'lanish</h2>
                <form action="{{ route('contact.apply') }}" method="POST"
                      style="padding: 20px; border-radius: 8px; background-color: #f9f9f9;">
                    @csrf
                    <input type="text" name="name" placeholder="Ismingiz:" required
                           style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #004a9f;">
                    <input type="text" name="phone" placeholder="Telefon raqamingiz:" required
                           style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #004a9f;">
                    <textarea name="message" placeholder="Xabaringiz:" required
                              style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #004a9f;"></textarea>
                    <button type="submit"
                            style="background-color: #004a9f; color: white; padding: 15px 30px; border: none; border-radius: 5px; font-size: 1.2rem; cursor: pointer;">
                        Jo'natish
                    </button>
                </form>


            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <div class="social-media" style="text-align: center; margin-top: 20px;">
        <i class="fab fa-facebook-square"
           style="font-size: 2rem; color: #004a9f; margin: 0 15px; transition: transform 0.5s ease;"></i>
        <i class="fab fa-twitter-square"
           style="font-size: 2rem; color: #004a9f; margin: 0 15px; transition: transform 0.5s ease;"></i>
        <i class="fab fa-linkedin"
           style="font-size: 2rem; color: #004a9f; margin: 0 15px; transition: transform 0.5s ease;"></i>
        <i class="fab fa-instagram"
           style="font-size: 2rem; color: #004a9f; margin: 0 15px; transition: transform 0.5s ease;"></i>
    </div>



@endsection
