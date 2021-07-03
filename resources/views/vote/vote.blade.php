@extends('layouts.app')

@section('content')
    
    <div class="container bg-white p-4 w-50">
        <h1>KBCF</h1>
        <hr>
        <h4>Choose Candidates</h4>
        <form action="{{route('voteupdate')}}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="form-group mt-3">
                
                <label for="nom1">Candidate 1:</label>
                <select name="candidate1" id="candidate" class="form-control" required>
                    @foreach($candidates as $candidate)

                    <option value="" hidden selected disabled>Choose one</option>
                    <option value="{{ $candidate->id }}">{{ $candidate->candidate }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                
                <label for="nom1">Candidate 2:</label>
                <select name="candidate2" id="candidate" class="form-control" required>
                    @foreach($candidates as $candidate)

                    <option value="" hidden selected disabled>Choose one</option>
                    <option value="{{ $candidate->id }}">{{ $candidate->candidate }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                
                <label for="nom1">Candidate 3:</label>
                <select name="candidate3" id="candidate" class="form-control" required>
                    @foreach($candidates as $candidate)

                    <option value="" hidden selected disabled>Choose one</option>
                    <option value="{{ $candidate->id }}">{{ $candidate->candidate }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                
                <label for="nom1">Candidate 4:</label>
                <select name="candidate4" id="candidate" class="form-control" required>
                    @foreach($candidates as $candidate)

                    <option value="" hidden selected disabled>Choose one</option>
                    <option value="{{ $candidate->id }}">{{ $candidate->candidate }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                
                <label for="nom1">Candidate 5:</label>
                <select name="candidate5" id="candidate" class="form-control" required>
                    @foreach($candidates as $candidate)

                    <option value="" hidden selected disabled>Choose one</option>
                    <option value="{{ $candidate->id }}">{{ $candidate->candidate }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                
                <label for="nom1">Candidate 6:</label>
                <select name="candidate6" id="candidate" class="form-control" required>
                    @foreach($candidates as $candidate)

                    <option value="" hidden selected disabled>Choose one</option>
                    <option value="{{ $candidate->id }}">{{ $candidate->candidate }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                
                <label for="nom1">Candidate 7:</label>
                <select name="candidate7" id="candidate" class="form-control" required>
                    @foreach($candidates as $candidate)

                    <option value="" hidden selected disabled>Choose one</option>
                    <option value="{{ $candidate->id }}">{{ $candidate->candidate }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                
                <label for="nom1">Candidate 8:</label>
                <select name="candidate8" id="candidate" class="form-control" required>
                    @foreach($candidates as $candidate)

                    <option value="" hidden selected disabled>Choose one</option>
                    <option value="{{ $candidate->id }}">{{ $candidate->candidate }}</option>

                    @endforeach
                </select>
            </div>

            

            
           
            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>

        </form>
    </div>

    

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
        $('select').on('change', function(event ) {
            var prevValue = $(this).data('previous');
        $('select').not(this).find('option[value="'+prevValue+'"]').show();    
            var value = $(this).val();
        $(this).data('previous',value); $('select').not(this).find('option[value="'+value+'"]').hide();
        });
        });
    </script>
@endsection