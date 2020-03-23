// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imgsearch.Models
{
    public class AddImageAdvanceRequest : TeaModel {
        [NameInMap("ImageUrlObject")]
        [Validation(Required=true)]
        public Stream ImageUrlObject { get; set; }

        [NameInMap("DbName")]
        [Validation(Required=true)]
        public string DbName { get; set; }

        [NameInMap("DataId")]
        [Validation(Required=true)]
        public string DataId { get; set; }

        [NameInMap("ExtraData")]
        [Validation(Required=false)]
        public string ExtraData { get; set; }

        [NameInMap("EntityId")]
        [Validation(Required=true)]
        public string EntityId { get; set; }

    }

}
