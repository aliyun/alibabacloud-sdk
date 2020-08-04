// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeLaunchTemplatesRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("TemplateTag")]
        [Validation(Required=false)]
        public List<DescribeLaunchTemplatesRequestTemplateTag> TemplateTag { get; set; }
        public class DescribeLaunchTemplatesRequestTemplateTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("LaunchTemplateId")]
        [Validation(Required=false)]
        public List<string> LaunchTemplateId { get; set; }

        [NameInMap("LaunchTemplateName")]
        [Validation(Required=false)]
        public List<string> LaunchTemplateName { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("TemplateResourceGroupId")]
        [Validation(Required=false)]
        public string TemplateResourceGroupId { get; set; }

    }

}
