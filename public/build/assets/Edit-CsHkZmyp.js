import{r as d,o as i,c as n,w as c,b as e,i as p,k as m,e as u,O as f}from"./app-DzJWFajY.js";import{_ as x}from"./AuthenticatedLayout-BeDqA725.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const b=e("h5",{class:"text-xl font-bold text-light-dark"},"Category",-1),g={class:"flex flex-col px-3"},_=e("label",{class:"mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700",for:"name"}," Category name ",-1),h=e("div",{class:"flex justify-end w-full mt-6"},[e("button",{type:"submit",class:"px-6 py-3 font-bold text-white bg-black rounded-lg"}," Update Category ")],-1),k={__name:"Edit",props:{category:{type:Array,required:!0}},setup(s){const o=s,t=d({id:o.category.id,name:o.category.name});function r(){f.patch(`/dashboard/categories/${t.id}`,t)}return(y,a)=>(i(),n(x,{"page-title":"Edit Category"},{default:c(()=>[e("form",{onSubmit:u(r,["prevent"]),action:"",class:"flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"},[b,e("div",g,[_,p(e("input",{type:"text","onUpdate:modelValue":a[0]||(a[0]=l=>t.name=l),id:"",class:"rounded-lg border border-solid border-gray-300 bg-white",placeholder:"Colour",required:""},null,512),[[m,t.name]])]),h],32)]),_:1}))}};export{k as default};
