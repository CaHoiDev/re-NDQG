@extends('portfolio.components.layout')

@section('title')<title>gotham</title>@endsection

<style>
    #portada{
        background: url('{{ asset('images/gotham1/0001.jpg') }}');
    }
    #portada-back{
        background: url('{{ asset('images/gotham1/0035.jpg') }}');
    }
    #portada, #portada-back{
        background-size: 100% 100%;
    }

    #g0002{
        background: url('{{ asset('images/gotham1/0002.jpg') }}');
        background-size: 100% 100%;

    }
    #g0003{
        background: url('{{ asset('images/gotham1/0003.jpg') }}');
        background-size: 100% 100%;

    }
    #g0004{
        background: url('{{ asset('images/gotham1/0004.jpg') }}');
        background-size: 100% 100%;

    }#g0005{
         background: url('{{ asset('images/gotham1/0005.jpg') }}');
         background-size: 100% 100%;

     }
    #g0006{
        background: url('{{ asset('images/gotham1/0006.jpg') }}');
        background-size: 100% 100%;

    }
    #g0007{
        background: url('{{ asset('images/gotham1/0007.jpg') }}');
        background-size: 100% 100%;

    }
    #g0008{
        background: url('{{ asset('images/gotham1/0008.jpg') }}');
        background-size: 100% 100%;

    }
    #g0009{
        background: url('{{ asset('images/gotham1/0009.jpg') }}');
        background-size: 100% 100%;

    }
    #g0010{
        background: url('{{ asset('images/gotham1/0010.jpg') }}');
        background-size: 100% 100%;

    }
    #g0011{
        background: url('{{ asset('images/gotham1/0011.jpg') }}');
        background-size: 100% 100%;

    }
    #g0012{
        background: url('{{ asset('images/gotham1/0012.jpg') }}');
        background-size: 100% 100%;

    }
    #g0013{
        background: url('{{ asset('images/gotham1/0013.jpg') }}');
        background-size: 100% 100%;

    }
    #g0014{
        background: url('{{ asset('images/gotham1/0014.jpg') }}');
        background-size: 100% 100%;

    }
    #g0015{
        background: url('{{ asset('images/gotham1/0015.jpg') }}');
        background-size: 100% 100%;

    }
    #g0016{
        background: url('{{ asset('images/gotham1/0016.jpg') }}');
        background-size: 100% 100%;

    }
    #g0017{
        background: url('{{ asset('images/gotham1/0017.jpg') }}');
        background-size: 100% 100%;

    }
    #g0018{
        background: url('{{ asset('images/gotham1/0018.jpg') }}');
        background-size: 100% 100%;

    }
    #g0019{
        background: url('{{ asset('images/gotham1/0019.jpg') }}');
        background-size: 100% 100%;

    }
    #g0020{
        background: url('{{ asset('images/gotham1/0020.jpg') }}');
        background-size: 100% 100%;

    }
    #g0021{
        background: url('{{ asset('images/gotham1/0021.jpg') }}');
        background-size: 100% 100%;

    }
    #g0022{
        background: url('{{ asset('images/gotham1/0022.jpg') }}');
        background-size: 100% 100%;

    }
    #g0023{
        background: url('{{ asset('images/gotham1/0023.jpg') }}');
        background-size: 100% 100%;

    }
    #g0024{
        background: url('{{ asset('images/gotham1/0024.jpg') }}');
        background-size: 100% 100%;

    }
    #g0025{
        background: url('{{ asset('images/gotham1/0025.jpg') }}');
        background-size: 100% 100%;

    }
    #g0026{
        background: url('{{ asset('images/gotham1/0026.jpg') }}');
        background-size: 100% 100%;

    }
    #g0027{
        background: url('{{ asset('images/gotham1/0027.jpg') }}');
        background-size: 100% 100%;

    }
    #g0028{
        background: url('{{ asset('images/gotham1/0028.jpg') }}');
        background-size: 100% 100%;

    }
    #g0029{
        background: url('{{ asset('images/gotham1/0029.jpg') }}');
        background-size: 100% 100%;

    }
    #g0020{
        background: url('{{ asset('images/gotham1/0030.jpg') }}');
        background-size: 100% 100%;

    }
    #g0031{
        background: url('{{ asset('images/gotham1/0031.jpg') }}');
        background-size: 100% 100%;

    }
    #g0032{
        background: url('{{ asset('images/gotham1/0032.jpg') }}');
        background-size: 100% 100%;

    }
    #g0034{
        background: url('{{ asset('images/gotham1/0034.jpg') }}');
        background-size: 100% 100%;

    }
</style>

@section('id')id="gotham-page"@endsection

@section('main')

<!--main-->
<main >
    <div class="container">
        <div class="Book__intro" id="Book__intro">
            <div class="center" id="center">
                <div class="book__info ff-B">
                    <p>The Gotham</p>
                    <p>Nguyen Dang Quynh giao</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <p>Apr 03 2022</p>
                    <p id="view"><i class="ri-arrow-right-line"></i></p>
                </div>
                <div class="page" id="page">
                    <img src="{{ asset('images/gotham1/0001.jpg') }}" alt="">
                </div>
        </div>
        </div>
        <div class="thebook" id="thebook">
            <div class="book-content">
                <div class="book">
                    <div class="face-front" id="portada">
                    </div>
                    <div class="face-back" id="g0002">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0003">
                    </div>
                    <div class="face-back" id="g0004">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0005">
                    </div>
                    <div class="face-back" id="g0006">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0007">
                    </div>
                    <div class="face-back" id="g0008">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0009">
                    </div>
                    <div class="face-back" id="g0010">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0011">
                    </div>
                    <div class="face-back" id="g0012">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0013">
                    </div>
                    <div class="face-back" id="g0014">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0015">
                    </div>
                    <div class="face-back" id="g0016">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0017">
                    </div>
                    <div class="face-back" id="g0018">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0019">
                    </div>
                    <div class="face-back" id="g0020">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0021">
                    </div>
                    <div class="face-back" id="g0022">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0023">
                    </div>
                    <div class="face-back" id="g0024">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0025">
                    </div>
                    <div class="face-back" id="g0026">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0027">
                    </div>
                    <div class="face-back" id="g0028">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0029">
                    </div>
                    <div class="face-back" id="g0030">
                    </div>
                </div>
                <div class="book">
                    <div class="face-front" id="g0031">
                    </div>
                    <div class="face-back" id="g0032">
                    </div>
                </div>

                <div class="book">
                    <div class="face-front" id="g0034">

                    </div>
                    <div  class="face-back" id="portada-back" >

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{ asset('javascript/gotham.js') }}"></script>
@endsection
