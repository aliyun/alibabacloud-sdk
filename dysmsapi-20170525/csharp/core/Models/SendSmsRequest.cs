// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dysmsapi20170525.Models
{
    public class SendSmsRequest : TeaModel {
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

        [NameInMap("PhoneNumbers")]
        [Validation(Required=true)]
        public string PhoneNumbers { get; set; }

        [NameInMap("SignName")]
        [Validation(Required=true)]
        public string SignName { get; set; }

        [NameInMap("TemplateCode")]
        [Validation(Required=true)]
        public string TemplateCode { get; set; }

        [NameInMap("TemplateParam")]
        [Validation(Required=false)]
        public string TemplateParam { get; set; }

        [NameInMap("SmsUpExtendCode")]
        [Validation(Required=false)]
        public string SmsUpExtendCode { get; set; }

        [NameInMap("OutId")]
        [Validation(Required=false)]
        public string OutId { get; set; }

    }

}
