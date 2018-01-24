var dijkstra_path;
var dijkstra_map;
var dijkstra_max_path;
var dijkstra_curr_node_index;
var dijkstra_visited;
var dijkstra_curr_value;

var dijkstra_node_list = {};

var dijksrta_node ={
    path: [],
    distance:0,
    index:null
}

function Dijkstra(map,start,finish){
    dijkstra_visited = [];
    dijkstra_path = [];
    dijkstra_curr_value = 0;
    dijkstra_map = map;
    dijkstra_curr_node_index = start;
    dijkstra_path.push(start);
    dijkstra_visited.push(start);
    var parent = dijksrta_node;
    parent.path.push(start);
    parent.distance = 0;
    console.log("parent: %o",parent);
    dijkstra_node_list[start] = parent;
    nextStep(start,finish);
   // dijkstra_max_path = dijkstra_node_list[0];
}

function getPath(){
    return dijkstra_path;
}


function nextStep(start,finish){
   // console.log("curr_node: "+start);
    var curr_value = dijkstra_node_list[start].distance;
    var selected;
    var node_selection = [];
    for(var i = 0; i<dijkstra_map[start].vertex.length; i++){
        var curr_vertex = dijkstra_map[start].vertex[i];
        if(!ifVisited(curr_vertex.node)){
            var compute_distance = curr_value+curr_vertex.distance;
           // console.log("selection node: "+curr_vertex.node+" compute_distance: "+compute_distance);
            node_selection.push({node:curr_vertex.node,distance:compute_distance});
            dijkstra_visited.push(curr_vertex.node);
        }
    }
    for(var i = 0; i<node_selection.length; i++){
        var new_life = dijkstra_node_list[start];
        new_life.path.push(node_selection[i].node);
        new_life.distance = node_selection[i].distance;
        console.log('life %o',new_life);
        dijkstra_node_list[node_selection[i].node] = new_life;        
        if(node_selection[i].node==finish){
            console.log("find");
            dijkstra_path = new_life.path;
            return;
        }else{
            nextStep(node_selection[i].node,finish);
        }
    }


}


function ifVisited(vertex){
    for(var i = 0; i<dijkstra_visited.length; i++){
        if(dijkstra_visited[i]==vertex){
            console.log("exist node: "+vertex);
            return true;
        }
    }
    console.log("not exist node: "+vertex);
    return false;
}

