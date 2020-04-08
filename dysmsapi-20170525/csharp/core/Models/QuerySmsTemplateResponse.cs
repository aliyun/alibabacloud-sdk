// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dysmsapi20170525.Models
{
    public class QuerySmsTemplateResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("TemplateStatus")]
        [Validation(Required=true)]
        public int? TemplateStatus { get; set; }

        [NameInMap("Reason")]
        [Validation(Required=true)]
        public string Reason { get; set; }

        [NameInMap("TemplateCode")]
        [Validation(Required=true)]
        public string TemplateCode { get; set; }

        [NameInMap("TemplateType")]
        [Validation(Required=true)]
        public int? TemplateType { get; set; }

        [NameInMap("TemplateName")]
        [Validation(Required=true)]
        public string TemplateName { get; set; }

        [NameInMap("TemplateContent")]
        [Validation(Required=true)]
        public string TemplateContent { get; set; }

        [NameInMap("CreateDate")]
        [Validation(Required=true)]
        public string CreateDate { get; set; }

    }

}
