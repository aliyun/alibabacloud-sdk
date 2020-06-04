// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetDefaultAITemplateResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TemplateInfo")]
        [Validation(Required=true)]
        public GetDefaultAITemplateResponseTemplateInfo TemplateInfo { get; set; }
        public class GetDefaultAITemplateResponseTemplateInfo : TeaModel {
            [NameInMap("TemplateId")]
            [Validation(Required=true)]
            public string TemplateId { get; set; }
            [NameInMap("TemplateType")]
            [Validation(Required=true)]
            public string TemplateType { get; set; }
            [NameInMap("TemplateName")]
            [Validation(Required=true)]
            public string TemplateName { get; set; }
            [NameInMap("TemplateConfig")]
            [Validation(Required=true)]
            public string TemplateConfig { get; set; }
            [NameInMap("Source")]
            [Validation(Required=true)]
            public string Source { get; set; }
            [NameInMap("IsDefault")]
            [Validation(Required=true)]
            public string IsDefault { get; set; }
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }
            [NameInMap("ModifyTime")]
            [Validation(Required=true)]
            public string ModifyTime { get; set; }
        };

    }

}
