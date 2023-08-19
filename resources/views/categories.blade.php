@extends('layouts.app')

@section('content')
    <div id="categories" style="width: 100vw; height: 100vh;">

    </div>

    <script type="text/javascript">
        // create an array with nodes
        var nodes = new vis.DataSet([
                @foreach($categories as $category)
                    { id: 'c{{ $category->id }}', label: "", title: '{{ $category->name }}', color: '#1BBD1B', },
                    @foreach($category->keywords as $keyword)
                        { id: 'c{{ $category->id }}k{{ $keyword->id }}', label: '', title: "{{ $keyword->name }}", color: '#FFB20E' },
                        @foreach($keyword->documents as $document)
                            { id: 'c{{ $category->id }}k{{ $keyword->id }}d{{ $document->id }}', label: '', title: "{{ $document->name }}", color: '#E43983' },
                        @endforeach
                    @endforeach
            @endforeach
        ]);

        // create an array with edges
        var edges = new vis.DataSet([
                @foreach($categories as $category)
                    @foreach($category->keywords as $keyword)
                        { from: 'c{{ $category->id }}k{{ $keyword->id }}', to: 'c{{ $category->id }}' },
                        @foreach($keyword->documents as $document)
                            { from: 'c{{ $category->id }}k{{ $keyword->id }}d{{ $document->id }}', to: 'c{{ $category->id }}k{{ $keyword->id }}' },
                        @endforeach
                @endforeach
            @endforeach
        ]);

        // create a network
        var container = document.getElementById("categories");
        var data = {
            nodes: nodes,
            edges: edges,
        };
        var options = {
            edges: {
                arrows: {
                    from: {
                        enabled: true
                    }
                }
            },
            layout: {
                hierarchical: {
                    enabled: false
                }
            }
        };
        var network = new vis.Network(container, data, options);

        network.on( 'click', function(properties) {
            var ids = properties.nodes;
            var clickedNodes = nodes.get(ids);
            console.log('clicked nodes:', clickedNodes);
        });
    </script>
@endsection
