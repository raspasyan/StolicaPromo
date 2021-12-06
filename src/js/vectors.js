function vLength(v) {
    return Math.sqrt(Math.pow(v[0], 2) + Math.pow(v[1], 2));
}

function vNorm(v) {
    let l = vLength(v);
    return [v[0] / l, v[1] / l];
}

function vMult(v1, v2) {
    return (v1[0] * v2[0]) + (v1[1] * v2[1]);
}

function vRad(v1, v2) {
    return Math.acos(vMult(vNorm(v1), vNorm(v2)));
}

function toDeg(v) {
    return v * 180 / Math.PI;
}

function vAdd(v1, v2) {
    return [v1[0] + v2[0], v1[1] + v2[1]];
}
function vSub(v1, v2) {
    return [v1[0] - v2[0], v1[1] - v2[1]];
}
function vMultScalar(v, s) {
    return [v[0] * s, v[1] * s];
}