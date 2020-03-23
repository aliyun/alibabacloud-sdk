// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imgsearch.Models
{
    public class AddImageRequest : TeaModel {
        [NameInMap("DbName")]
        [Validation(Required=true)]
        public string DbName { get; set; }

        [NameInMap("DataId")]
        [Validation(Required=true)]
        public string DataId { get; set; }

        [NameInMap("ImageUrl")]
        [Validation(Required=true)]
        public string ImageUrl { get; set; }

        [NameInMap("ExtraData")]
        [Validation(Required=false)]
        public string ExtraData { get; set; }

        [NameInMap("EntityId")]
        [Validation(Required=true)]
        public string EntityId { get; set; }

    }

}
