@extends('student.master')

@section('dashboard')
    <div>
        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-0">
                    <div class="card-header bg-info">
                        <h3 class="text-center">Profile</h3>
                    </div>

                    <div class="card-header">
                        <img src="{{asset($studentProfileInfo->image)}}" alt="Not found" style="height: 200px;width: 100%">

                        <h6>Name : {{ $studentProfileInfo->name }}</h6>
                        <h6>Email : {{ $studentProfileInfo->email }}</h6>
                        <h6>Contact : {{ $studentProfileInfo->mobile }}</h6>
                        <h6>Address : {{ $studentProfileInfo->address }}</h6>
                        <h6>Status : {{ $studentProfileInfo->status == 1 ? 'Active' : 'Inactive' }}</h6>
                        <hr>
                        <a href="{{ route('update.profile',['id'=>$studentProfileInfo->id]) }}" class="btn btn-success rounded-0">Update Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h4>About {{ $studentProfileInfo->name }}</h4>
                <p style="text-align: justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid consequatur corporis delectus dolor est eveniet fugit iusto magni molestiae molestias neque, nisi nulla quas ratione, reiciendis, reprehenderit veniam voluptatem. Accusamus aliquam dignissimos dolorum eos facilis in itaque libero mollitia nam necessitatibus neque obcaecati, odio officiis quia quisquam <br>tempora ut veniam veritatis. Aperiam consectetur cum deleniti ea exercitationem neque perferendis reiciendis. Alias aut doloremque numquam officia optio placeat tenetur voluptatem. Deserunt enim ex ipsam iusto laudantium magnam magni, numquam possimus similique tempora, tempore ut voluptas voluptatum! Animi aut eum iste iure provident quibusdam quisquam recusandae rem, repellat rerum soluta, voluptate!
                </p>
            </div>
        </div>
    </div>
@endsection

