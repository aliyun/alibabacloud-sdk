// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class CreateDynamicTagGroupRequest : TeaModel {
        [NameInMap("TagKey")]
        [Validation(Required=true)]
        public string TagKey { get; set; }

        [NameInMap("EnableSubscribeEvent")]
        [Validation(Required=false)]
        public bool? EnableSubscribeEvent { get; set; }

        [NameInMap("EnableInstallAgent")]
        [Validation(Required=false)]
        public bool? EnableInstallAgent { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("MatchExpressFilterRelation")]
        [Validation(Required=false)]
        public string MatchExpressFilterRelation { get; set; }

        [NameInMap("MatchExpress")]
        [Validation(Required=false)]
        public List<CreateDynamicTagGroupRequestMatchExpress> MatchExpress { get; set; }
        public class CreateDynamicTagGroupRequestMatchExpress : TeaModel {
            [NameInMap("TagValueMatchFunction")]
            [Validation(Required=false)]
            public string TagValueMatchFunction { get; set; }

            [NameInMap("TagValue")]
            [Validation(Required=false)]
            public string TagValue { get; set; }

        }

        [NameInMap("ContactGroupList")]
        [Validation(Required=true)]
        public List<string> ContactGroupList { get; set; }

        [NameInMap("TemplateIdList")]
        [Validation(Required=false)]
        public List<string> TemplateIdList { get; set; }

    }

}
