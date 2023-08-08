import ThemeTable from"./theme-table.svelte";export let getFontFamilyGroup=()=>{let e=[],t=0;for(let[o,l]of Object.entries(window.csf_typography_json.webfonts)){let i=l.label;e[t]={id:o,group:i,options:[]};for(let[i,d]of Object.entries(l.fonts))e[t].options.push({id:"google"==o?i:d,label:"google"==o?i:d});t++}return e};export let getColors=()=>({primary:"#1d1f20",secondary:"#3e4244",white:"#ffffff",border:"#1d1f20"});export let getBorderStyles=()=>[{id:"solid",label:"Solid"},{id:"dashed",label:"Dashed"},{id:"dotted",label:"Dotted"},{id:"double",label:"Double"},{id:"inset",label:"Inset"},{id:"outset",label:"Outset"},{id:"groove",label:"Groove"},{id:"ridge",label:"Ridge"},{id:"none",label:"None"}];export const getAlignments=()=>[{id:"left",icon:"&#xe236;",label:"Left"},{id:"center",icon:"&#xe234;",label:"Center"},{id:"right",icon:"&#xe237;",label:"Right"},{id:"justify",icon:"&#xe235;",label:"Justify"}];export const getDevices=()=>[{id:"desktop",icon:"&#xe30c;"},{id:"mobile",icon:"&#xe32c;",isPro:!0}];export const getFieldComponents=()=>[{id:"standard-theme",configType:"style",component:ThemeTable}];