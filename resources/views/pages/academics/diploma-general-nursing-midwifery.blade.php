@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Diploma in General Nursing and Midwifery"
value1="Home"
value2="Academics"
value3="Diploma in General Nursing and Midwifery"
/>


<div class="site-main">


    <div class="ttm-row sidebar ttm-sidebar-left clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                @php
                $menuItems = [
                    ['title' => 'B.Sc Nursing', 'url' => '/academics/nursing'],
                    ['title' => 'Diploma in General Nursing and Midwifery', 'url' => Request::path()],
                    ['title' => 'Auxiliary Nurse Midwifery', 'url' => '/academics/auxiliary-nurse-midwifery'],


                ];

                @endphp

            <x-sidebar-menu :menuItems="$menuItems" />

                <div class="col-lg-12 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-service-description">
                            <h3>DGNM (Diploma in General Nursing and Midwifery): A Transformative 3-Year Program</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <img class="img-fluid" src="{{asset('images/academics/Diploma-in-General-Nursing-and-Midwifery.webp')}}" alt="Diploma-in-General-Nursing-and-Midwifery-1" height="100%" width="100%">
                                </div>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The Diploma in General Nursing and Midwifery (DGNM) is a comprehensive three-year program designed to prepare aspiring nurses for a rewarding career in healthcare. This program combines academic learning, clinical training, and field experiences to equip students with the necessary skills and knowledge in nursing and midwifery.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <h3>Clinical Training at Medical College Hospital, Nagai</h3>
                                <p class="text-justify">
                                    One of the key components of the DGNM program is the clinical training conducted at the esteemed Medical College Hospital in Nagai. Under the guidance of experienced nursing professionals and faculty, students gain practical exposure to a hospital environment. They actively participate in patient care, learn essential nursing procedures, and apply theoretical concepts to real-life scenarios. This hands-on training hones their clinical skills and prepares them for the challenges of the nursing profession.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <h3>Field Training at Primary Health Centres</h3>
                                <p class="text-justify">
                                    In addition to clinical training, students also undergo field training at various Primary Health Centres, including Thevur, Nagore, and Nagapattinam. These field training experiences provide students with an understanding of community healthcare and the opportunity to deliver primary care services. Working alongside healthcare professionals, students learn to provide comprehensive healthcare, health education, and support preventive care initiatives.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <h3>Comprehensive Curriculum</h3>
                                <p class="text-justify">
                                    The DGNM program offers a comprehensive curriculum that covers a wide range of subjects, including anatomy, physiology, pharmacology, medical-surgical nursing, midwifery, and community health nursing. Students gain a deep understanding of the principles and practices of nursing, midwifery care, and healthcare ethics. The curriculum is designed to develop their critical thinking abilities, enhance their communication skills, and foster a patient-centered approach to care.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <h3>Nurturing Practical Skills</h3>
                                <p class="text-justify">
                                    Practical skill development is a vital aspect of the DGNM program. Students acquire hands-on experience in essential nursing procedures, including medication administration, wound care, vital signs assessment, and patient monitoring. They also learn midwifery skills, such as antenatal care, labor support, and postnatal care. These practical skills are essential for providing competent and compassionate care to patients and ensuring safe deliveries for expectant mothers.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <h3>Personal and Professional Growth</h3>
                                <p class="text-justify">
                                    Throughout the program, students experience personal and professional growth. They develop qualities such as empathy, compassion, and ethical responsibility towards their patients. They learn to work collaboratively with interdisciplinary healthcare teams, adapt to different healthcare settings, and effectively manage time and resources. The program fosters their personal and professional development, shaping them into skilled and dedicated healthcare professionals.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    Upon completion of the DGNM program, graduates are ready to embark on a fulfilling career in nursing and midwifery. They are well-prepared to provide quality healthcare services, support expectant mothers during childbirth, and make a positive impact on the well-being of individuals and communities.
                                </p>
                            </div>
                        </div>
                    </div>



                </div>


            </div><!-- row end -->
        </div>
    </div>


</div>

@endsection
