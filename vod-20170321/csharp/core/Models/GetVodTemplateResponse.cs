// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetVodTemplateResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VodTemplateInfo")]
        [Validation(Required=true)]
        public GetVodTemplateResponseVodTemplateInfo VodTemplateInfo { get; set; }
        public class GetVodTemplateResponseVodTemplateInfo : TeaModel {
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }
            [NameInMap("VodTemplateId")]
            [Validation(Required=true)]
            public string VodTemplateId { get; set; }
            [NameInMap("TemplateType")]
            [Validation(Required=true)]
            public string TemplateType { get; set; }
            [NameInMap("SubTemplateType")]
            [Validation(Required=true)]
            public string SubTemplateType { get; set; }
            [NameInMap("Source")]
            [Validation(Required=true)]
            public string Source { get; set; }
            [NameInMap("IsDefault")]
            [Validation(Required=true)]
            public string IsDefault { get; set; }
            [NameInMap("TemplateConfig")]
            [Validation(Required=true)]
            public string TemplateConfig { get; set; }
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }
            [NameInMap("ModifyTime")]
            [Validation(Required=true)]
            public string ModifyTime { get; set; }
        };

    }

}
