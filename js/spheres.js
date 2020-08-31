const canvas = document.querySelector('#spheres');
const renderer = new THREE.WebGLRenderer({canvas});

const fov = 75;
const aspect = 2;  // the canvas default
const near = 0.1;
const far = 100;
const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
camera.position.z = 100;

const scene = new THREE.Scene();
scene.background = new THREE.Color(0x111111);

var segmentCount = 50,
    radius = 75,
    geometry = new THREE.Geometry(),
    material = new THREE.LineDashedMaterial({ color: 0xFFFFFF, linewidth: 1, scale: 1, dashSize: 2, gapSize: 20});

for (var i = 0; i <= segmentCount; i++) {
    var theta = (i / segmentCount) * Math.PI * 2;
    geometry.vertices.push(
        new THREE.Vector3(
            Math.cos(theta) * radius,
            Math.sin(theta) * radius,
            0));            
}
var line = new THREE.Line(geometry, material)
line.computeLineDistances();
scene.add(line);
renderer.render(scene, camera);