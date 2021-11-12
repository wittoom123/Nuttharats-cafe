@extends('layouts/app')
@section('content')

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{asset('/img/navbar-logo.svg')}}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#portfolio">สินค้า</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">ยินดีต้อนรับสู่เว็บไซต์ ณัฐรัฐน์ คาเฟ่</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Nuttharats Café Website </a>
        </div>
    </header>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">สินค้า</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/e.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">ลาเต้</div>
                            <div class="portfolio-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/d.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">มอคค่า</div>
                            <div class="portfolio-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/f.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">อเมริกาโน่</div>
                            <div class="portfolio-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/g.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">โกโก้</div>
                            <div class="portfolio-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/j.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">เอสเพรสโซ</div>
                            <div class="portfolio-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/h.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">คาปูชิโน</div>
                            <div class="portfolio-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ลาเต้</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/e.jpg" alt="..." />
                                    <p>คือเครื่องดื่มกาแฟที่เตรียมด้วยนมร้อน โดยเทเอสเปรสโซ 1/3 ส่วน
                                        และนมร้อนที่ตีด้วยไอน้ำจากเครื่องชง 2/3 ส่วน ลงในถ้วยพร้อม ๆ กัน
                                        และจะหยอดฟองนมหนาประมาณ 1 เซนติเมตร ทับข้างบน
                                        กาแฟชนิดนี้มีหน้าตาคล้ายกับกาเฟโอแลของฝรั่งเศสมาก
                                        แต่กาเฟโอแลมักเตรียมจากกาแฟดำที่ชงแบบหยด[1]
                                        ผสมกับนมที่อุ่นให้ร้อนในอัตราส่วนเท่ากัน</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong></strong>

                                        </li>
                                        <li>
                                            <strong></strong>

                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">มอคค่า</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/d.jpg" alt="..." />
                                    <p>กาแฟมอคค่า ที่เรียกกันตามสากลนิยมว่า Cafe Mocha หรือ Mocha Coffee
                                        มีวิธีการชงคล้ายคลึงกับกาแฟลาเต้มากทีเดียว คือมีเอสเพรสโซ่และนมร้อนเป็นส่วนผสม
                                        แต่แตกต่างกันที่มอคค่าจะมีส่วนผสมของ ช็อคโกแลต เข้าไปด้วย
                                        หากเสิร์ฟในถ้วยเซรามิคทึบแสง ก็ยากจะแยะว่าเป็นเมนูใด แต่ถ้าเสิร์ฟในแก้วใส
                                        จะเห็นการแยกชั้นกันชัดเจนดีเทียวระหว่าง 3 ประสาน คือ เอสเพรสโซ ช็อคโกแลต และนม
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong></strong>

                                        </li>
                                        <li>
                                            <strong></strong>

                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">อเมริกาโน่</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/f.jpg" alt="..." />
                                    <p>แม้จุดเริ่มต้นของกาแฟหลายๆ
                                        ประเภทจะมาจากอิตาลีแต่ความแปลกคือกาแฟอเมริกาโน่มีจุดเริ่มต้นมาจากสหรัฐฯ
                                        คือมียุคหนึ่งที่กาแฟเริ่มกลายเป็นเรื่องแพร่หลายมากขึ้น สหรัฐฯ
                                        เองก็กำลังมีการแผ่ขยายอำนาจความสามารถของตนเองไปทั่วโลกในรอบด้านทำให้กาแฟกลายเป็นเรื่องของสองทวีปหลักๆ
                                        ได้แก่อเมริกาเหนือกับยุโรป ส่วนจุดเริ่มต้นแท้จริงของกาแฟอเมริกาโน่มาจากชาวสหรัฐฯ
                                        ได้มีการทดลองดื่มกาแฟเอสเปรสโซ่ของอิตาลีแล้วปรากฏว่ารสชาติมันเข้มข้นเกินไป
                                        ขอย้อนกลับไปก่อนว่ารสนิยมการดื่มกาแฟของชาวยุโปรกับอเมริกามันมีความต่างกันอยู่
                                        ชาวยุโรปจะดื่มกาแฟเป็นมื้อๆ ไป เช่น ตอนเช้ายังไม่ค่อยแรงมากขอเป็นคาปูชิโน่
                                        แต่ตอนบ่ายต้องการกระตุ้นพลังในตัวให้กระฉับกระเฉงเลยเลือกดื่มเอสเปรสโซ่ที่มีความเข้มข้นสูง
                                        ทว่านิสัยการดื่มกาแฟของคนอเมริกันคือจะดื่มตลอดทั้งวัน
                                        ไม่ได้มีการเลือกเวลาว่าต้องดื่มช่วงไหน
                                        จากความต่างด้านวัฒนธรรมส่งผลให้การเลือกดื่มกาแฟของสองฝั่งต่างกันด้วย
                                        พอชาวอเมริกันได้ลองดื่มกาแฟเอสเปรสโซ่ของอิตาลีรู้สึกว่ารสชาติเข้มข้นเกินไป ขม
                                        รู้สึกไม่ชอบ ทำให้คนอิตาลีเลือกเติมน้ำร้อนเพิ่มเข้าไปอีกแล้วลองดื่มอีกรอบ
                                        พร้อมมีการบ่งบอกว่านี่คือกาแฟที่คุณต้องการรสชาติไม่ขม
                                        ไม่เข้มอย่างตอนแรกจริงแล้วออกแนวเชิงประชดประชันมากกว่าเพราะมาดูถูกว่ากาแฟพวกเขาไม่อร่อย
                                        ชาวอิตาลีจึงมีการเรียกกาแฟที่ผสมน้ำเพื่อให้เกิดความเจือจางของรสชาตินี้ว่า
                                        อเมริกาโน่ หมายถึง อเมริกัน หรือทำนองว่าเครื่องดื่มสำหรับคนอเมริกัน

                                        พื้นฐานรสชาติการดื่มกาแฟของคนอเมริกันจะเน้นเรื่องความอ่อนนุ่ม ละมุนลิ้น
                                        ดังนั้นกาแฟส่วนมากที่พวกเขาชอบจะมีส่วนผสมของนมเข้ามาด้วย
                                        ส่วนชาวยุโรปโดยเฉพาะอิตาลีที่เป็นต้นตำรับการดื่มกาแฟจะชอบความเข้มข้น
                                        การได้กลิ่นได้รสชาติกาแฟอย่างแท้จริงแบบเอสเปรสโซ่ คือเอาง่ายๆ ว่ารสชาติดุ
                                        สีเข้มถึงใจ ใครไม่กล้าจงถอยไปดีกว่า
                                        นี่จึงเป็นที่มาของกาแฟอเมริกาโน่ที่เราเห็นกันมาจนทุกวันนี้พร้อมทำให้รู้ว่าทั้งสองประเภทต่างกันอย่างไร
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong></strong>

                                        </li>
                                        <li>
                                            <strong></strong>

                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">โกโก้</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/g.jpg" alt="..." />
                                    <p>คือผลิตผลที่ได้มาจากเมล็ดของต้นโกโก้เขตร้อน
                                        ช็อกโกแลตเป็นส่วนผสมของของหวานหลายชนิดไม่ว่าจะเป็นไอศกรีม ลูกอม คุกกี้ เค้ก
                                        หรือว่าพาย ช็อกโกแลตถือได้ว่าเป็นของหวานอย่างหนึ่งที่ถูกใจคนทั่วโลก

                                        ช็อกโกแลตทำจากการหมัก คั่ว
                                        และบดอย่างไม่ละเอียดของเมล็ดโกโก้ซึ่งได้มาจากต้นโกโก้เขตร้อน (tropical cacao
                                        tree) ซึ่งมีต้นกำเนิดจากอเมริกากลางและเม็กซิโก
                                        ต้นโกโก้นั้นค้นพบโดยชาวอินเดียนแดงและชาวอัซเตก (Aztecs)
                                        แต่ในปัจจุบันได้แพร่กระจายและปลูกไปทั่วเขตร้อน
                                        เมล็ดของต้นโกโก้นั้นมีรสฝาดที่เข้มข้นมาก ผลผลิตของเมล็ดโกโก้รู้จักกันในนาม
                                        "ช็อกโกแลต" หรือบางส่วนของโลกในนาม "โกโก้"</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong></strong>

                                        </li>
                                        <li>
                                            <strong></strong>

                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">เอสเพรสโซ</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/j.jpg" alt="..." />
                                    <p>กาแฟเอสเปรสโซ่ถือกำเนิดขึ้นเป็นครั้งแรกในประเทศอิตาลีราวๆ ศตวรรษที่ 20
                                        ช่วงเวลาดังกล่าวกาแฟกลายเป็นหัวใจสำคัญในการดำรงชีวิตของคนอิตาลี
                                        คนที่นำเอากาแฟเอสเปรสโซ่เข้ามายังประเทศอิตาลีเป็นชาวแอฟริกันมุสลิมแต่คนที่ได้ชื่อว่าเป็นคนคิดค้นกาแฟเอสเปรสโซ่ขึ้นมาจริงจังเป็นเจ้าของโรงงานแห่งหนึ่งในเมืองมิลานนามว่า
                                        ลุยจิ เบเซร่า ชาวอิตาเลียน เรื่องราวนี้ต้องย้อนกลับไปตั้งแต่ปี 1903
                                        ลุยจิเองรู้สึกว่าทุกเช้าเมื่อเขาตื่นขึ้นมาเขารู้สึกได้ถึงความเสียเวลาในการชงกาแฟอย่างมาก
                                        นั่นจึงทำให้เขามีไอเดียในการคิดค้นเครื่องมือบางอย่างสำหรับเป็นตัวช่วยในเรื่องการชงกาแฟให้มีความรวดเร็วมากขึ้น
                                        ลุยจิได้เรียกเครื่องดังกล่าวนี้ว่า Fast Coffee Machine หรือในภาษาอิตาเลียนคือ
                                        espresso ความหมายตรงตัวของภาษาเมื่อแปลเป็นไทยคือ รวดเร็ว. เร่งด่วน
                                        นั่นจึงกลายมาเป็นจุดเริ่มต้นของกาแฟที่คนทั่วโลกรู้จักในเวลาต่อมาว่า
                                        กาแฟเอสเปรสโซ่

                                        ในปี 1905 เป็นเรื่องน่าเสียดายมากเมื่อ ลุยจิ เบเซร่า
                                        ได้ตัดสินใจขายเครื่องชงกาแฟนั้นทิ้งให้กับ เดซิเดอโร่ ปาโวนี่
                                        เนื่องจากเขาเองเป็นคนไม่มีความรู้ทางการตลาด
                                        แต่ปาโวนี่มีความเชี่ยวชาญทางการตลาดสูง
                                        เขาได้ทำการจดสิทธิบัตรเครื่องนี้อย่างเป็นทางการ
                                        จากสิ่งนี้เองทำให้กาแฟพร้อมเครื่องขงกาแฟเอสเปรสโซ่เริ่มได้รับความนิยมในสหรัฐฯ
                                        ตั้งแต่ช่วงปี 1927
                                        กระทั่งกาแฟเอสเปรสโซ่ได้กลายเป็นเครื่องดื่มยอดนิยมของคนทั้งโลกไปโดยปริยาย

                                        ทุกวันนี้กาแฟเอสเปรสโซ่ได้มีการพลิกแพลงสูตรต่างๆ
                                        ผสมผสานเข้าไปมากมายแล้วแต่ความชื่นชอบของคนในพื้นที่นั้นๆ
                                        อย่างในอังกฤษคนมักนิยมผสมกับนมและฟองนมจึงเรียกว่า คาปูชิโน่ ในสหรัฐฯ
                                        เอาไปผสมกับนมเรียกว่า ลาเต้ พูดง่ายๆ คือ
                                        กาแฟเอสเปรสโซ่เป็นเสมือนต้นตำรับของกาแฟหลายๆ ชนิดทั่วโลก
                                        ทำให้คนยุคนี้มีกาแฟรสชาติดีๆ ดื่มมากมาย จุดเริ่มต้นมาจากกาแฟรสเข้มตัวนี้นั่นเอง
                                        ถือว่ามีความเป็นเอกลักษณ์เฉพาะตัวสุดๆ สำหรับกาแฟเอสเปรสโซ่</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong></strong>

                                        </li>
                                        <li>
                                            <strong></strong>

                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">คาปูชิโน</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/h.jpg" alt="..." />
                                    <p>กาแฟคาปูชิโน่ดั้งเดิมตามประวัติเป็นเครื่องดื่มประเภทกาแฟมีชื่อว่า Kapuziner
                                        ซึ่งเป็นกาแฟแบบเวียนนาเกิดขึ้นในช่วงทศวรรษ 1700
                                        เป็นช่วงเวลาเดียวกับการเกิดขึ้นของกาแฟที่เรียกว่า Franziskaner
                                        กาแฟดั้งเดิมนี้มีการบันทึกเอาไว้ว่าเป็นกาแฟที่มีส่วนผสมของครีมกับน้ำตาล
                                        แม้อาจไม่ได้บอกแบบชัดเจนว่ามีส่วนผสมอะไรเพิ่มเติมบ้าง กาแฟ Kapuziner
                                        ถูกกล่าวถึงครั้งแรกในงานเขียนเมื่อปี 1850
                                        มีการอธิบายไว้ว่ากาแฟชนิดนี้เป็นกาแฟผสมระหว่างครีมกับน้ำตาล
                                        สำหรับชื่อดังเดิมนี้มาจากสีของกาแฟมีลักษณะใกล้เคียงกับเครื่องนุ่งห่มของนักบวช
                                        Capuchin ในกรุงเวียนนา
                                        กระทั่งการกลายมาเป็นกาแฟคาปูชิโน่แบบที่เรารู้จักทุกวันนี้ถูกกล่าวถึงเป็นครั้งแรกทางตอนเหนือของอิตาลีช่วงทศวรรษ
                                        1930
                                        มีรูปถ่ายในช่วงเวลาดังกล่าวให้ความรู้สึกใกล้เคียงกับเครื่องดื่มดั้งเดิมของชาวเวียนนาซึ่งเป็นกาแฟที่มีวิปปิ้งครีมท็อปหน้าด้วยอบเชยไม่ก็ช็อกโกแลต
                                        อย่างไรก็ตามกาแฟคาปูชิโน่ของอิตาเลียนได้มีการพัฒนาสูตรอย่างต่อเนื่อง
                                        มีการใช้นมเป็นส่วนประกอบในเวลาต่อมา</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong></strong>

                                        </li>
                                        <li>
                                            <strong></strong>

                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
@endsection