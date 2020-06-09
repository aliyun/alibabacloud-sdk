// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class CopyGtmConfigRequest : TeaModel {
        [NameInMap("Lang")]
        [Validation(Required=false)]
        public string Lang { get; set; }

        [NameInMap("SourceId")]
        [Validation(Required=true)]
        public string SourceId { get; set; }

        [NameInMap("TargetId")]
        [Validation(Required=true)]
        public string TargetId { get; set; }

        [NameInMap("CopyType")]
        [Validation(Required=true)]
        public string CopyType { get; set; }

    }

}
