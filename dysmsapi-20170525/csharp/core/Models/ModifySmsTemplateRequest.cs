// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dysmsapi20170525.Models
{
    public class ModifySmsTemplateRequest : TeaModel {
        [NameInMap("AccessKeyId")]
        [Validation(Required=false)]
        public string AccessKeyId { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=false)]
        public long OwnerId { get; set; }

        [NameInMap("ResourceOwnerAccount")]
        [Validation(Required=false)]
        public string ResourceOwnerAccount { get; set; }

        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("TemplateType")]
        [Validation(Required=true)]
        public int? TemplateType { get; set; }

        [NameInMap("TemplateName")]
        [Validation(Required=true)]
        public string TemplateName { get; set; }

        [NameInMap("TemplateCode")]
        [Validation(Required=true)]
        public string TemplateCode { get; set; }

        [NameInMap("TemplateContent")]
        [Validation(Required=true)]
        public string TemplateContent { get; set; }

        [NameInMap("Remark")]
        [Validation(Required=true)]
        public string Remark { get; set; }

    }

}
