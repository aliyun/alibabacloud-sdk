// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class AddFaceRequest : TeaModel {
        [NameInMap("DbName")]
        [Validation(Required=true)]
        public string DbName { get; set; }

        [NameInMap("FaceId")]
        [Validation(Required=true)]
        public string FaceId { get; set; }

        [NameInMap("ImageUrl")]
        [Validation(Required=true)]
        public string ImageUrl { get; set; }

        [NameInMap("EntityId")]
        [Validation(Required=true)]
        public string EntityId { get; set; }

        [NameInMap("ExtraData")]
        [Validation(Required=false)]
        public string ExtraData { get; set; }

    }

}
