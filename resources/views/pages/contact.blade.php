@extends('layouts.app')

@section('content')


    @php
        $lang = App::getLocale();
    @endphp

    <!-- Animation Section -->
    <section class="animate-section">
        <h2>Bizning maqsadimiz</h2>
        {{--            <p>Delivering excellence in everything we do, with a focus on the future.</p>--}}

        <div class="animate-cols" style="display: flex; justify-content: space-around; margin-top: 40px;">
            <div class="animate-col"
                 style="flex: 1; padding: 20px; background-color: #004a9f; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                <h3 class="text-white">Sifat</h3>
                <p class="text-white">Biz amalga oshirgan har bir ishda eng yuqori standartlarga rioya qilamiz.</p>
            </div>
            <div class="animate-col"
                 style="flex: 1; padding: 20px; background-color: #004a9f; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                <h3 class="text-white">Innovatsiya</h3>
                <p class="text-white">Yangi g'oyalar va ilg'or texnologiyalar bilan ilhomlantirilgan.</p>
            </div>
            <div class="animate-col"
                 style="flex: 1; padding: 20px; background-color: #004a9f; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                <h3 class="text-white">Qo'llab-quvvatlash</h3>
                <p class="text-white">Sizning muvaffaqiyatingiz bizning ustuvorligimizdir, doimiy qo'llab-quvvatlash
                    bilan.</p>
            </div>
            <div class="animate-col"
                 style="flex: 1; padding: 20px; background-color: #004a9f; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                <h3 class="text-white">Ishonch</h3>
                <p class="text-white"> O'zaro ishonch va halollik asosida munosabatlar o'rnatish.</p>
            </div>
        </div>
    </section>

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
                <p style="color: white;">(+123) 456-7890</p>
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
                <p style="color: white;">contact@website.com</p>
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
                <p style="color: white;">123 Main Street, City, Country</p>
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
                <form style=" border: #004a9f !important;">
                    <input type="text" name="name" placeholder="Ismingiz:" required
                           style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: #004a9f;">
                    <input type="text" name="phone" placeholder="Telefon raqamingiz:" required
                           style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: #004a9f;">
                    <textarea name="message" placeholder="Xabaringiz:" required
                              style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: #004a9f;"></textarea>
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
