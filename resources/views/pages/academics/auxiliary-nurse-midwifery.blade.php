@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Auxiliary Nurse Midwifery"
value1="Home"
value2="Academics"
value3="Auxiliary Nurse Midwifery"
/>


<div class="site-main">


    <div class="ttm-row sidebar ttm-sidebar-left clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                @php
                $menuItems = [
                    ['title' => 'B.Sc Nursing', 'url' => '/academics/nursing'],
                    ['title' => 'Diploma in General Nursing and Midwifery', 'url' => '/academics/diploma-general-nursing-midwifery'],
                    ['title' => 'Auxiliary Nurse Midwifery', 'url' => Request::path()],


                ];

                @endphp

            <x-sidebar-menu :menuItems="$menuItems" />

                <div class="col-lg-12 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-service-single-content-area">
                            <div class="ttm-service-description">
                                <h3>ANM (Auxiliary Nurse Midwifery): Empowering Healthcare Professionals in 2 Years</h3>

                                <div class="padding_top20 padding_bottom20">
                                    <div class="ttm_fatured_image-wrapper">
                                        <img class="img-fluid" src="{{asset('images/academics/auxiliary-nurse-midwifery.webp')}}" alt="Diploma-in-General-Nursing-and-Midwifery-1" height="100%" width="100%">
                                    </div>
                                </div>

                                <div class="padding_top15 padding_bottom5">
                                    <p class="text-justify">
                                        The Auxiliary Nurse Midwifery (ANM) program is a comprehensive two-year program designed to train compassionate healthcare professionals in providing essential nursing and midwifery care. Through a combination of theoretical knowledge and field training, ANM students develop the skills and expertise necessary to make a positive impact on the health and well-being of individuals and communities.
                                    </p>
                                </div>

                                <div class="padding_top15 padding_bottom5">
                                    <h3>Field Training in Thevur, Nagore, and Nagapattinam</h3>
                                    <p class="text-justify">
                                        Field training plays a crucial role in the ANM program. Students receive practical exposure by working in various healthcare settings, including Thevur, Nagore, and Nagapattinam. This field training allows students to engage with the local community, understand their healthcare needs, and provide primary healthcare services. It is an opportunity to learn firsthand the challenges and rewards of delivering care in diverse environments.
                                    </p>
                                </div>

                                <div class="padding_top15 padding_bottom5">
                                    <h3>Comprehensive Curriculum</h3>
                                    <p class="text-justify">
                                        The ANM curriculum covers a wide range of subjects, including anatomy, physiology, community health nursing, midwifery, nutrition, and childcare. Students gain in-depth knowledge of healthcare principles, preventive care, maternal and child health, family planning, and healthcare ethics. The curriculum is designed to equip students with the necessary theoretical foundation to deliver quality nursing and midwifery care.
                                    </p>
                                </div>

                                <div class="padding_top15 padding_bottom5">
                                    <h3>Midwifery Skills and Expertise</h3>
                                    <p class="text-justify">
                                        One of the focal points of the ANM program is midwifery. Students learn essential midwifery skills, including antenatal care, labor support, postnatal care, and newborn care. These skills are critical for ensuring safe deliveries, providing maternal and infant health support, and promoting a healthy start to life. ANM students are trained to be compassionate and skilled midwives who can provide comprehensive care during the critical phases of pregnancy and childbirth.
                                    </p>
                                </div>

                                <div class="padding_top15 padding_bottom5">
                                    <h3>Community Healthcare Focus</h3>
                                    <p class="text-justify">
                                        ANM training emphasizes community healthcare and primary care services. Students learn to assess the health needs of the community, deliver healthcare education, and promote preventive care practices. They are trained to identify health risks, implement health promotion programs, and provide support for health emergencies. The program equips students with the knowledge and skills to be effective healthcare advocates and change agents within their communities.
                                    </p>
                                </div>

                                <div class="padding_top15 padding_bottom5">
                                    <h3>Professional Development and Empowerment</h3>
                                    <p class="text-justify">
                                        The ANM program focuses on personal and professional development, nurturing qualities such as empathy, compassion, and effective communication. Students are trained to work collaboratively within healthcare teams, uphold ethical standards, and prioritize patient-centered care. The program fosters a sense of responsibility and empowerment among ANM graduates, preparing them to be confident and competent healthcare professionals.
                                    </p>
                                </div>

                                <div class="padding_top15 padding_bottom5">
                                    <p class="text-justify">
                                        Upon completion of the ANM program, graduates are equipped with the skills and knowledge to provide essential nursing and midwifery care. They play a vital role in promoting community health, delivering maternal and child healthcare services, and serving as frontline healthcare providers. ANMs are instrumental in improving the health outcomes of individuals and communities, making a significant contribution to the field of healthcare.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>


            </div><!-- row end -->
        </div>
    </div>


</div>

@endsection
