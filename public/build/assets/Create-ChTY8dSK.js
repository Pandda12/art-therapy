import{r as l,o as r,c as d,w as i,b as e,i as n,k as c,e as m,O as f}from"./app-DzJWFajY.js";import{_ as p}from"./AuthenticatedLayout-BeDqA725.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const u=e("h5",{class:"text-xl font-bold text-light-dark"},"Category",-1),x={class:"flex flex-col px-3"},b=e("label",{class:"mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700",for:"name"}," Category name ",-1),_=e("div",{class:"flex justify-end w-full mt-6"},[e("button",{type:"submit",class:"px-6 py-3 font-bold text-white bg-black rounded-lg"}," Add Category ")],-1),v={__name:"Create",setup(h){const t=l({name:null});function s(){f.post("/dashboard/categories",t)}return(g,o)=>(r(),d(p,{"page-title":"Add Category"},{default:i(()=>[e("form",{onSubmit:m(s,["prevent"]),action:"",class:"flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"},[u,e("div",x,[b,n(e("input",{type:"text","onUpdate:modelValue":o[0]||(o[0]=a=>t.name=a),id:"",class:"rounded-lg border border-solid border-gray-300 bg-white",placeholder:"Colours",required:""},null,512),[[c,t.name]])]),_],32)]),_:1}))}};export{v as default};