@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="B.Sc Nursing"
value1="Home"
value2="Academics"
value3="B.Sc Nursing"
/>


<div class="site-main">


    <div class="ttm-row sidebar ttm-sidebar-left clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                @php
                $menuItems = [
                    ['title' => 'B.Sc Nursing', 'url' => Request::path()],
                    ['title' => 'Diploma in General Nursing and Midwifery', 'url' => '/academics/diploma-general-nursing-midwifery'],
                    ['title' => 'Auxiliary Nurse Midwifery', 'url' => '/academics/auxiliary-nurse-midwifery'],


                ];

                @endphp

            <x-sidebar-menu :menuItems="$menuItems" />

                <div class="col-lg-12 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-service-description">
                            <h3>B.Sc (Nursing) Program: A Comprehensive 4-Year Journey</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <img class="img-fluid" src="{{asset('images/academics/nursing.webp')}}" alt="nursing-1" height="100%" width="100%">
                                </div>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The Bachelor of Science in Nursing (B.Sc Nursing) program is a comprehensive academic journey spanning four years. It equips aspiring nurses with the knowledge, skills, and experience required to excel in the field of healthcare. Throughout this program, students engage in a combination of rigorous coursework, clinical training, and field experiences to develop their expertise.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <h3>Clinical Training at Thiruvarur Medical College</h3>
                                <p class="text-justify">
                                    One of the highlights of the B.Sc Nursing program is the clinical training conducted at the prestigious Thiruvarur Medical College. Under the guidance of experienced nursing professionals and faculty, students get hands-on experience in a hospital setting. They actively participate in patient care, observe medical procedures, and apply theoretical knowledge to real-life scenarios.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <h3>Field Training at Primary Health Centres</h3>
                                <p class="text-justify">
                                    In addition to clinical training, students also undergo field training at various Primary Health Centres, including Thevur, Nagore, and Nagapattinam. These training opportunities provide valuable exposure to community healthcare settings. Students work alongside healthcare professionals to provide primary care services, health education, and disease prevention initiatives. It is an opportunity to understand the unique challenges and rewards of working in community healthcare.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <h3>Holistic Learning Approach</h3>
                                <p class="text-justify">
                                    The B.Sc Nursing program adopts a holistic learning approach to prepare students for their future nursing careers. The curriculum covers a wide range of subjects, including anatomy, physiology, pharmacology, nursing theories, and healthcare ethics. Students gain a deep understanding of patient care, evidence-based practice, and interdisciplinary collaboration.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <h3>Practical Skill Development</h3>
                                <p class="text-justify">
                                    Practical skill development is a crucial aspect of the B.Sc Nursing program. Students learn essential nursing procedures, such as administering medications, wound care, vital signs assessment, and patient monitoring. They also develop effective communication and critical thinking skills, which are vital in providing quality patient care.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <h3>Personal and Professional Growth</h3>
                                <p class="text-justify">
                                    Throughout the four-year program, students experience personal and professional growth. They develop a strong sense of empathy, compassion, and ethical responsibility towards their patients. They also learn to work as part of a healthcare team, adapting to different healthcare settings, and effectively managing time and resources.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    By the end of the B.Sc Nursing program, students are well-prepared to enter the nursing profession, equipped with the necessary knowledge, practical skills, and clinical experience. They are poised to make a positive impact on patient care, contributing to the healthcare sector with their dedication, expertise, and commitment to improving the well-being of individuals and communities.
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
