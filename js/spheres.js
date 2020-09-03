const canvas = document.querySelector('#spheres');
const renderer = new THREE.WebGLRenderer({canvas, antialias: true});


const fov = 75;
const aspect = 2;  // the canvas default
const near = 0.1;
const far = 100;
const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
camera.position.z = 100;

const scene = new THREE.Scene();
scene.background = new THREE.Color(0x111111);



var geometry = new THREE.CircleGeometry( 10, 128 );
var material = new THREE.MeshBasicMaterial( { color: 0xffff00 } );
var circle = new THREE.Mesh( geometry, material );
scene.add( circle );


var width = 80,
    number = 20;

for(let i = 0; i < number; i++){
    let circleGeometry = new THREE.CircleGeometry( 5, 128 );
    let circleMaterial = new THREE.MeshBasicMaterial( { color: 0xffffff } );
    let circleMesh = new THREE.Mesh( circleGeometry, circleMaterial );
    scene.add( circleMesh );
    circleMesh.position.set( i, width/2 - number*i, 1);
}


renderer.render(scene, camera);