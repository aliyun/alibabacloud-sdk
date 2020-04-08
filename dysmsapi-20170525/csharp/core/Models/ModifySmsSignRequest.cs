// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dysmsapi20170525.Models
{
    public class ModifySmsSignRequest : TeaModel {
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

        [NameInMap("SignName")]
        [Validation(Required=true)]
        public string SignName { get; set; }

        [NameInMap("SignSource")]
        [Validation(Required=true)]
        public int? SignSource { get; set; }

        [NameInMap("SignFileList")]
        [Validation(Required=true)]
        public List<ModifySmsSignRequestSignFileList> SignFileList { get; set; }
        public class ModifySmsSignRequestSignFileList : TeaModel {
            [NameInMap("FileSuffix")]
            [Validation(Required=true)]
            public string FileSuffix { get; set; }

            [NameInMap("FileContents")]
            [Validation(Required=true)]
            public string FileContents { get; set; }

        }

        [NameInMap("Remark")]
        [Validation(Required=true)]
        public string Remark { get; set; }

    }

}
