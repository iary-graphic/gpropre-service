import{k as l}from"./index.66ecdd60.js";import{a as n}from"./addons.a944c7fa.js";import{l as c}from"./license.6e70d73d.js";import{C as d}from"./Caret.a21d4ca8.js";import"./translations.d159963e.js";import{_ as p}from"./_plugin-vue_export-helper.eefbdd86.js";import{_ as s}from"./default-i18n.20001971.js";import{v as f,o as h,k as _,l as m,x as g,t as o,a as q,b as F}from"./runtime-dom.esm-bundler.5c3c7d72.js";const a="all-in-one-seo-pack",y={setup(){return{licenseStore:l()}},components:{CoreAlert:d},props:{addon:String,coreFeature:{type:Array,default(){return[]}},addonFeature:{type:Array,default(){return[]}}},data(){return{strings:{thisFeatureRequires:s("This feature requires one of the following plans:",a),thisFeatureRequiresSingular:s("This feature requires the following plan:",a)}}},computed:{requiredPlansString(){return 1<this.requiredPlans.length?this.strings.thisFeatureRequires:this.strings.thisFeatureRequiresSingular},getRequiredPlans(){return this.requiredPlans.join(", ")},showAlert(){return n.requiresUpgrade(this.addon)&&this.requiredPlans.length},requiredPlans(){if(this.coreFeature.length||this.addonFeature.length){const r=this.coreFeature[0]||this.addonFeature[0],t=this.coreFeature.length?typeof this.coreFeature[1]<"u"?this.coreFeature[1]:"":typeof this.addonFeature[1]<"u"?this.addonFeature[1]:"";return c.getPlansForFeature(r,t)}return n.currentPlans(this.addon)||[]}}};function P(r,t,S,i,x,e){const u=f("core-alert");return i.licenseStore.isUnlicensed||e.showAlert?(h(),_(u,{key:0,class:"aioseo-required-plans",type:"blue"},{default:m(()=>[g(o(e.requiredPlansString)+" ",1),q("strong",null,o(e.getRequiredPlans),1)]),_:1})):F("",!0)}const T=p(y,[["render",P]]);export{T as R};
