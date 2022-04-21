@extends("portfolio.components.layout")

@section('title')<title>home</title>@endsection

@section('id')id="index"@endsection

@section('main')

<main class="main">

<!--    project-->
    <div id="project" class="container flex-column">
        <div class="container__header">
            <div class="flex container__header--inner">
                <div class="container__title ff-B">
                    <span>Project</span>
                </div>
                <div class="pointer open__container__btn flex al-flex-end">
                    <a class="explore" href="#"><span>explore more ...</span></a>
                </div>
            </div>
            <div class="line--main"></div>
        </div>

        <div class="container__content project__content">
            <div class="project__content__row">
                <div class="item project__item" id="portrait">
                    <div class="item__animation">
                        <img class="project__item__image" src="images/portrait/Cách%20điệu%20chân%20dung%20daniel-5-1.jpg" alt="">
                        <img class="project__item__image" src="images/portrait/Cách%20điệu%20chân%20dung%20daniel-2-1.jpg" alt="">
                        <img class="project__item__image" src="images/portrait/Cách%20điệu%20chân%20dung%20daniel-3-1.jpg" alt="">
                        <img class="project__item__image" src="images/portrait/Cách%20điệu%20chân%20dung%20daniel-4-1.jpg" alt="">
                    </div>
                </div>
                <div class="item project__item" id="vatican">
                    <div class="item__animation">
                        <img class="project__item__image" src="images/vatican/b2d236da901c5f42060d.jpg" alt="">
                        <img class="project__item__image" src="images/vatican/4c8139759fb350ed09a2.jpg" alt="">
                        <img class="project__item__image" src="images/vatican/PE4B23TE1.jpg" alt="">
                        <div class="project__item__image project__item__des">
                            <div class="project__name  ff-B">
                                THE VATICAN
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item project__item" id="turtle">
                    <div class="item__animation">
                        <img src="images/rua/IMG_E2409.JPG" alt="" class="project__item__image">
                        <img src="images/rua/IMG_E2282.JPG" alt="" class="project__item__image">
                        <img src="images/rua/IMG_E2414.JPG" alt="" class="project__item__image">
                        <img src="images/rua/IMG_E2398.JPG" alt="" class="project__item__image">
                    </div>
                </div>
            </div>
            <div class="project__content__row">
                <div class="item project__item" id="heroic">
                    <div class="item__animation">
                        <img src="images/Heroic/Nghiên%20cứu%20Heroic%20realism%20(%20chủ%20nghĩa%20hiện%20thực%20anh%20hùng).jpg" alt="" class="project__item__image">
                        <img src="images/Heroic/Nghiên%20cứu%20truyện%20Grimm.jpg" alt="" class="project__item__image">
                        <img src="images/Heroic/Nghiên%20cứu%20truyện%20Grimm.jpg" alt="" class="project__item__image">
                        <img src="images/Heroic/Nghiên%20cứu%20Heroic%20realism%20(%20chủ%20nghĩa%20hiện%20thực%20anh%20hùng).jpg" alt="" class="project__item__image">
                    </div>
                </div>
                <div class="item project__item" id="gotham">
                    <div class="item__animation">
                        <img src="images/gotham/LAYOUT%20SÁCH-7-1.jpg" alt="" class="project__item__image">
                        <img src="images/gotham/LAYOUT%20SÁCH-1-1.jpg" alt="" class="project__item__image">
                        <img src="images/gotham/LAYOUT%20SÁCH-3-1.jpg" alt="" class="project__item__image">
                        <img src="images/gotham/LAYOUT%20SÁCH-13-1.jpg" alt="" class="project__item__image">
                    </div>
                </div>
                <div class="item project__item">
                    <img src="images/museum/vangoghmuseum-s0530N2012-800.jpg" alt="" class="project__item__image">
                </div>
            </div>
        </div>
    </div>

<!--    museum-->
    <div id="museum" class="container flex-column">
        <div class="container__header">
            <div class="flex container__header--inner">
                <div class="container__title ff-B">
                    <span>Museum</span>
                </div>
                <div class="pointer open__container__btn flex al-flex-end">
                    <a class="explore" href="#"><span>explore more ...</span></a>
                </div>
            </div>
            <div class="line--main"></div>
        </div>
        <div class="container__content museum__content">
            <div class="museum__content__row">
                <div class="museum__item">
                    <img src="images/museum/vangoghmuseum-s0005V1962-800.jpg" alt="">
                    <div class="museum__item__des">
                        <div class="art__date">
                            20th, March 2022
                        </div>
                        <div class="art__name">
                            The First Date Ever In The World.
                        </div>
                        <a href="" class="discover-btn">
                            discover
                        </a>
                    </div>
                </div>
                <div class="museum__item">
                    <img src="images/museum/vangoghmuseum-s0206V1962-800.jpg" alt="">
                    <div class="museum__item__des">
                        <div class="art__date">
                            20th, March 2022
                        </div>
                        <div class="art__name">
                            The First Date Ever In The World.
                        </div>
                        <a href="" class="discover-btn">
                            discover
                        </a>
                    </div>
                </div>
            </div>
            <div class="museum__content__row">
                <div class="museum__item">
                    <img src="images/museum/vangoghmuseum-s0022V1962-800.jpg" alt="">
                    <div class="museum__item__des">
                        <div class="art__date">
                            20th, March 2022
                        </div>
                        <div class="art__name">
                            The First Date Ever In The World.
                        </div>
                        <a href="" class="discover-btn">
                            discover
                        </a>
                    </div>
                </div>
            </div>
            <div class="museum__content__row">
                <div class="museum__item">
                    <img src="images/museum/vangoghmuseum-s0424M1991-800.jpg" alt="">
                    <div class="museum__item__des">
                        <div class="art__date">
                            20th, March 2022
                        </div>
                        <div class="art__name">
                            The First Date Ever In The World.
                        </div>
                        <a href="" class="discover-btn">
                            discover
                        </a>
                    </div>
                </div>
                <div class="museum__item">
                    <img src="images/museum/vangoghmuseum-s0019V1962-800.jpg" alt="">
                    <div class="museum__item__des">
                        <div class="art__date">
                            20th, March 2022
                        </div>
                        <div class="art__name">
                            The First Date Ever In The World.
                        </div>
                        <a href="" class="discover-btn">
                            discover
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about-me" class="container flex-column">
        <div class="container__header">
            <div class="flex container__header--inner">
                <div class="container__title ff-B">
                    <span>About me</span>
                </div>
                <div class="pointer open__container__btn flex al-flex-end">
                    <i class="ri-arrow-down-line icon--primary"></i>
                </div>
            </div>
            <div class="line--main"></div>
        </div>
        <div class="container__content about__container">
            <div class="avatar">
                <img src="images/profile/avatar.jpg" alt="">
            </div>
            <div class="about">
                <div class="about-header">Nguyen Dang Quynh Giao</div>
                <div class="about-detail">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis expedita itaque possimus quos recusandae repellendus repudiandae suscipit veniam? Aspernatur eos illum ipsa iste iusto minus quam temporibus unde veritatis!
                    consectetur adipisicing elit. Ab accusantium corporis dicta dolorem esse est et explicabo incidunt iste itaque modi natus omnis quas qui quod recusandae, repudiandae sunt voluptatibus.
                </div>
                <div class="about-detail">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis expedita itaque possimus quos recusandae repellendus repudiandae suscipit veniam? Aspernatur eos illum ipsa iste iusto minus quam temporibus unde veritatis!
                </div>
                <div class="btn">
                    chat with me
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="container flex-column">
        <div class="container__header">
            <div class="flex container__header--inner">
                <div class="container__title ff-B">
                    <span>Contact</span>
                </div>
                <div class="pointer open__container__btn flex al-flex-end">
                    <i class="ri-arrow-down-line icon--primary"></i>
                </div>
            </div>
            <div class="line--main"></div>
        </div>
        <div class="container__content contact__form">
            <div class="contact__info">
                <div class="logo logo--big">
                    Giao
                </div>
                <div class="owner-name">
                    Nguyen Dang Quynh Giao
                </div>
                <ul class="contact__method__list">
                    <li class="contact__method">
                        <a href="" class="contact__link">
                            <i class="ri-mail-fill"></i>
                            <span>giaogiao@gmail.com</span>
                        </a>
                    </li>
                    <li class="contact__method">
                        <a href="" class="contact__link">
                            <i class="ri-facebook-box-fill"></i>
                            <span>Nguyen Dang Quynh Giao</span>
                        </a>
                    </li>
                    <li class="contact__method">
                        <a href="" class="contact__link">
                            <i class="ri-linkedin-box-fill"></i>
                            <span>giao linkedin</span>
                        </a>
                    </li>
                    <li class="contact__method">
                        <a href="" class="contact__link">
                            <i class="ri-behance-line"></i>
                            <span>giao behance</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contact__action">
                <label for="name">
                    <span class="label">name</span>
                    <input type="text" id="name" name="name">
                </label>
                <label for="email">
                    <span class="label">email</span>
                    <input type="text" id="email" name="email">
                </label>
                <label for="message">
                    <span class="label">message</span>
                    <textarea id="message" name="message"></textarea>
                </label>
                <button type="submit" class="button">
                    submit
                </button>
            </div>
        </div>
    </div>

</main>

<script src="{{ url('javascript/index.js') }}"></script>
@endsection
