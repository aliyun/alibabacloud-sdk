// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeLaunchTemplateVersionsRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("LaunchTemplateId")]
        [Validation(Required=false)]
        public string LaunchTemplateId { get; set; }

        [NameInMap("LaunchTemplateName")]
        [Validation(Required=false)]
        public string LaunchTemplateName { get; set; }

        [NameInMap("LaunchTemplateVersion")]
        [Validation(Required=false)]
        public List<long> LaunchTemplateVersion { get; set; }

        [NameInMap("MinVersion")]
        [Validation(Required=false)]
        public long MinVersion { get; set; }

        [NameInMap("MaxVersion")]
        [Validation(Required=false)]
        public long MaxVersion { get; set; }

        [NameInMap("DefaultVersion")]
        [Validation(Required=false)]
        public bool? DefaultVersion { get; set; }

        [NameInMap("DetailFlag")]
        [Validation(Required=false)]
        public bool? DetailFlag { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
