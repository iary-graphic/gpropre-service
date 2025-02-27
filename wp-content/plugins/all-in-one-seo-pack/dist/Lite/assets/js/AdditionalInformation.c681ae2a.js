import{b as P,u as x,r as L}from"./index.a87126ce.js";import{u as R}from"./Wizard.73aaeb1d.js";import{B as U}from"./Phone.33692cc0.js";import{B as A}from"./RadioToggle.333e7750.js";import{C as D}from"./HtmlTagsEditor.e7779e12.js";import{C as B}from"./ImageUploader.d24da2c6.js";import{C as J}from"./SocialProfiles.972fbc79.js";import{W as G,a as H,b as E}from"./Header.44b0ad0f.js";import{W as M}from"./CloseAndExit.f3b696d4.js";import{_ as T}from"./Steps.152a3e7d.js";import"./translations.d159963e.js";import{_ as Y}from"./_plugin-vue_export-helper.eefbdd86.js";import{u as j}from"./SetupWizardStore.efc7053d.js";import{_ as l}from"./default-i18n.20001971.js";import{c as p,C as s,l as u,v as m,o as c,a as o,x as h,t as r,b as g,G as q}from"./runtime-dom.esm-bundler.5c3c7d72.js";import"./helpers.53868b98.js";import"./addons.dc226733.js";import"./upperFirst.2cd99bdd.js";import"./_stringToArray.f9ddb970.js";import"./toString.f0787db8.js";import"./datetime.f197aeae.js";import"./preload-helper.5f06849a.js";import"./Editor.29413d15.js";import"./isEqual.96d3394c.js";import"./_baseIsEqual.aba7ca44.js";import"./_getTag.1e50d0c4.js";import"./_baseClone.2009409f.js";import"./_arrayEach.6af5abac.js";import"./index.1f3cb1fa.js";import"./Caret.d9cc70ba.js";import"./UnfilteredHtml.ffcab8e3.js";import"./constants.1ec71a84.js";import"./Img.90c4fd14.js";import"./Plus.426117bd.js";import"./Checkbox.6db0b9ed.js";import"./Checkmark.e40641dd.js";import"./Textarea.97983cdc.js";import"./SettingsRow.9f92e269.js";import"./Row.df38a5f6.js";import"./Facebook.c0193ddb.js";import"./Twitter.f6341402.js";import"./Logo.6c9d2b19.js";import"./Index.f71e22d2.js";const d="all-in-one-seo-pack",F={setup(){const{strings:t}=R({stage:"additional-information"});return{optionsStore:P(),rootStore:x(),setupWizardStore:j(),composableStrings:t}},components:{BasePhone:U,BaseRadioToggle:A,CoreHtmlTagsEditor:D,CoreImageUploader:B,CoreSocialProfiles:J,WizardBody:G,WizardCloseAndExit:M,WizardContainer:H,WizardHeader:E,WizardSteps:T},data(){return{showOtherSocialNetworks:!1,loaded:!1,loading:!1,strings:L(this.composableStrings,{additionalSiteInformation:l("Additional Site Information",d),personOrOrganization:l("Person or Organization",d),choosePerson:l("Choose a Person",d),person:l("Person",d),organization:l("Organization",d),personOrOrganizationDescription:l("Choose whether the site represents a person or an organization.",d),name:l("Name",d),organizationName:l("Organization Name",d),organizationDescription:l("Organization Description",d),phone:l("Phone Number",d),logo:l("Logo",d),defaultSocialShareImage:l("Default Social Share Image",d),yourSocialProfiles:l("Your Social Profiles",d),showMore:l("Show more",d)})}},watch:{"optionsStore.options.social.profiles":{deep:!0,handler(t){this.setupWizardStore.additionalInformation.social.profiles=t}}},computed:{users(){return[{label:l("Manually Enter Person",d),value:"manual"}].concat(this.rootStore.aioseo.users.map(t=>({label:`${t.displayName} (${t.email})`,gravatar:t.gravatar,value:t.id})))}},methods:{getPersonOptions(t){return this.users.find(a=>a.value===t)},saveAndContinue(){this.loading=!0,this.setupWizardStore.saveWizard("additionalInformation").then(()=>{this.$router.push(this.setupWizardStore.getNextLink)})},showHideOtherSocialNetworks(){this.showOtherSocialNetworks=!this.showOtherSocialNetworks}},beforeMount(){const t=JSON.parse(JSON.stringify(this.optionsStore.options.searchAppearance)),a=JSON.parse(JSON.stringify(this.optionsStore.options.social));this.setupWizardStore.additionalInformation.social.profiles=JSON.parse(JSON.stringify(a.profiles)),this.setupWizardStore.additionalInformation.socialShareImage=a.facebook.general.defaultImagePosts,this.setupWizardStore.additionalInformation.siteRepresents=t.global.schema.siteRepresents,this.setupWizardStore.additionalInformation.person=t.global.schema.person,this.setupWizardStore.additionalInformation.organizationName=t.global.schema.organizationName,this.setupWizardStore.additionalInformation.organizationDescription=t.global.schema.organizationDescription,this.setupWizardStore.additionalInformation.organizationLogo=t.global.schema.organizationLogo,this.setupWizardStore.additionalInformation.personName=t.global.schema.personName,this.setupWizardStore.additionalInformation.personLogo=t.global.schema.personLogo,this.setupWizardStore.additionalInformation.phone=t.global.schema.phone,this.loaded=!0}},K={class:"aioseo-wizard-additional-information"},Q={class:"header"},X={class:"person-or-organization aioseo-settings-row no-border no-margin"},Z={class:"settings-name"},$={class:"name small-margin"},oo={class:"aioseo-description"},eo={key:0,class:"aioseo-settings-row no-border no-margin"},io={class:"settings-name"},ao={class:"name small-margin"},to={class:"person-label"},no={key:0,class:"person-avatar"},so=["src"],ro={class:"person-name"},lo={class:"person-label"},mo={key:0,class:"person-avatar"},po=["src"],co={class:"person-name"},go={key:1,class:"schema-graph-name aioseo-settings-row no-border no-margin"},uo={class:"settings-name"},_o={class:"name small-margin"},ho={key:2,class:"schema-graph-name aioseo-settings-row no-border no-margin"},fo={class:"settings-name"},zo={class:"name small-margin"},So={key:3,class:"schema-graph-name aioseo-settings-row no-border no-margin"},vo={class:"settings-name"},Wo={class:"name small-margin"},bo={key:4,class:"schema-graph-phone aioseo-settings-row no-border no-margin"},Io={class:"settings-name"},wo={class:"name small-margin"},ko={key:5,class:"schema-graph-image aioseo-settings-row no-border no-margin"},No={class:"settings-name"},Vo={class:"name small-margin"},yo={key:6,class:"schema-graph-image aioseo-settings-row no-border no-margin"},Oo={class:"settings-name"},Co={class:"name small-margin"},Po={class:"schema-graph-image aioseo-settings-row"},xo={class:"settings-name"},Lo={class:"name small-margin"},Ro={class:"header social"},Uo={class:"go-back"},Ao=o("div",{class:"spacer"},null,-1);function Do(t,a,Bo,e,n,_){const v=m("wizard-header"),W=m("wizard-steps"),b=m("base-radio-toggle"),I=m("base-select"),z=m("core-html-tags-editor"),w=m("base-input"),k=m("base-phone"),f=m("core-image-uploader"),N=m("core-social-profiles"),S=m("router-link"),V=m("base-button"),y=m("wizard-body"),O=m("wizard-close-and-exit"),C=m("wizard-container");return c(),p("div",K,[s(v),s(C,null,{default:u(()=>[s(y,null,{footer:u(()=>[o("div",Uo,[s(S,{to:e.setupWizardStore.getPrevLink,class:"no-underline"},{default:u(()=>[h("←")]),_:1},8,["to"]),h("   "),s(S,{to:e.setupWizardStore.getPrevLink},{default:u(()=>[h(r(n.strings.goBack),1)]),_:1},8,["to"])]),Ao,s(V,{type:"blue",loading:n.loading,onClick:_.saveAndContinue},{default:u(()=>[h(r(n.strings.saveAndContinue)+" →",1)]),_:1},8,["loading","onClick"])]),default:u(()=>[s(W),o("div",Q,r(n.strings.additionalSiteInformation),1),o("div",X,[o("div",Z,[o("div",$,r(n.strings.personOrOrganization),1)]),s(b,{modelValue:e.setupWizardStore.additionalInformation.siteRepresents,"onUpdate:modelValue":a[0]||(a[0]=i=>e.setupWizardStore.additionalInformation.siteRepresents=i),name:"siteRepresents",options:[{label:n.strings.person,value:"person"},{label:n.strings.organization,value:"organization"}]},null,8,["modelValue","options"]),o("div",oo,r(n.strings.personOrOrganizationDescription),1)]),e.setupWizardStore.additionalInformation.siteRepresents==="person"?(c(),p("div",eo,[o("div",io,[o("div",ao,r(n.strings.choosePerson),1)]),s(I,{class:"person-chooser",options:_.users,modelValue:_.getPersonOptions(e.setupWizardStore.additionalInformation.person),"onUpdate:modelValue":a[1]||(a[1]=i=>e.setupWizardStore.additionalInformation.person=i.value)},{singleLabel:u(({option:i})=>[o("div",to,[i.gravatar?(c(),p("div",no,[o("img",{alt:"User Gravatar",src:i.gravatar},null,8,so)])):g("",!0),o("div",ro,r(i.label),1)])]),option:u(({option:i})=>[o("div",lo,[i.gravatar?(c(),p("div",mo,[o("img",{alt:"User Gravatar",src:i.gravatar},null,8,po)])):g("",!0),o("div",co,r(i.label),1)])]),_:1},8,["options","modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents==="organization"?(c(),p("div",go,[o("div",uo,[o("div",_o,r(n.strings.organizationName),1)]),s(z,{modelValue:e.setupWizardStore.additionalInformation.organizationName,"onUpdate:modelValue":a[2]||(a[2]=i=>e.setupWizardStore.additionalInformation.organizationName=i),"line-numbers":!1,"tags-context":"knowledgeGraph","default-tags":["site_title"]},null,8,["modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents==="organization"?(c(),p("div",ho,[o("div",fo,[o("div",zo,r(n.strings.organizationDescription),1)]),s(z,{modelValue:e.setupWizardStore.additionalInformation.organizationDescription,"onUpdate:modelValue":a[3]||(a[3]=i=>e.setupWizardStore.additionalInformation.organizationDescription=i),"line-numbers":!1,description:"","tags-context":"knowledgeGraph","default-tags":["tagline"]},null,8,["modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents!=="organization"&&e.setupWizardStore.additionalInformation.person==="manual"?(c(),p("div",So,[o("div",vo,[o("div",Wo,r(n.strings.name),1)]),s(w,{size:"medium",modelValue:e.setupWizardStore.additionalInformation.personName,"onUpdate:modelValue":a[4]||(a[4]=i=>e.setupWizardStore.additionalInformation.personName=i)},null,8,["modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents==="organization"?(c(),p("div",bo,[o("div",Io,[o("div",wo,r(n.strings.phone),1)]),s(k,{modelValue:e.setupWizardStore.additionalInformation.phone,"onUpdate:modelValue":a[5]||(a[5]=i=>e.setupWizardStore.additionalInformation.phone=i)},null,8,["modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents==="organization"?(c(),p("div",ko,[o("div",No,[o("div",Vo,r(n.strings.logo),1)]),s(f,{modelValue:e.setupWizardStore.additionalInformation.organizationLogo,"onUpdate:modelValue":a[6]||(a[6]=i=>e.setupWizardStore.additionalInformation.organizationLogo=i)},null,8,["modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents!=="organization"&&e.setupWizardStore.additionalInformation.person==="manual"?(c(),p("div",yo,[o("div",Oo,[o("div",Co,r(n.strings.logo),1)]),s(f,{modelValue:e.setupWizardStore.additionalInformation.personLogo,"onUpdate:modelValue":a[7]||(a[7]=i=>e.setupWizardStore.additionalInformation.personLogo=i)},null,8,["modelValue"])])):g("",!0),o("div",Po,[o("div",xo,[o("div",Lo,r(n.strings.defaultSocialShareImage),1)]),s(f,{modelValue:e.setupWizardStore.additionalInformation.socialShareImage,"onUpdate:modelValue":a[8]||(a[8]=i=>e.setupWizardStore.additionalInformation.socialShareImage=i)},null,8,["modelValue"])]),o("div",Ro,r(n.strings.yourSocialProfiles),1),n.loaded?(c(),p("div",{key:7,class:q(["social-profiles",{"show-more":n.showOtherSocialNetworks}])},[s(N,{leftSize:"4",rightSize:"8",sameUsernameWidth:"4",hideAdditionalProfiles:""}),o("a",{class:"show-more-link aioseo-col col-md-offset-4",onClick:a[9]||(a[9]=(...i)=>_.showHideOtherSocialNetworks&&_.showHideOtherSocialNetworks(...i))},r(n.strings.showMore),1)],2)):g("",!0)]),_:1}),s(O)]),_:1})])}const ye=Y(F,[["render",Do]]);export{ye as default};
